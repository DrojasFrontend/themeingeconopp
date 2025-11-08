/**
 * Validación de formularios Contact Form 7
 * Habilita el botón submit solo cuando todos los campos requeridos están completos
 */

function setupFormValidation(form) {
  const submitButton = form.querySelector('input[type="submit"]');
  
  if (!submitButton) {
    console.log('No se encontró botón submit en el formulario');
    return;
  }
  
  console.log('Configurando validación para formulario');
  
  // Deshabilitar el botón al inicio
  submitButton.disabled = true;
  submitButton.style.opacity = '0.5';
  submitButton.style.cursor = 'not-allowed';
  
  // Función para validar el formulario
  function validateForm() {
    // Obtener todos los campos requeridos
    const requiredFields = form.querySelectorAll('.wpcf7-validates-as-required');
    let allFieldsFilled = true;
    
    console.log('Validando campos requeridos:', requiredFields.length);
    
    requiredFields.forEach(field => {
      const value = field.value.trim();
      
      // Validación específica según el tipo de campo
      if (field.type === 'checkbox' || field.type === 'radio') {
        // Para checkboxes y radios, verificar si al menos uno está marcado
        const name = field.name;
        const checkedBoxes = form.querySelectorAll(`input[name="${name}"]:checked`);
        if (checkedBoxes.length === 0) {
          allFieldsFilled = false;
        }
      } else if (field.type === 'email') {
        // Validación básica de email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!value || !emailPattern.test(value)) {
          allFieldsFilled = false;
        }
      } else {
        // Para campos de texto, textarea, etc.
        if (!value) {
          allFieldsFilled = false;
        }
      }
    });
    
    // Habilitar o deshabilitar el botón según la validación
    if (allFieldsFilled) {
      submitButton.disabled = false;
      submitButton.style.opacity = '1';
      submitButton.style.cursor = 'pointer';
      console.log('✓ Botón habilitado');
    } else {
      submitButton.disabled = true;
      submitButton.style.opacity = '0.5';
      submitButton.style.cursor = 'not-allowed';
      console.log('✗ Botón deshabilitado');
    }
  }
  
  // Escuchar cambios en todos los campos del formulario
  const allInputs = form.querySelectorAll('input, textarea, select');
  
  console.log('Campos encontrados:', allInputs.length);
  
  allInputs.forEach(input => {
    // Eventos para diferentes tipos de campos
    input.addEventListener('input', validateForm);
    input.addEventListener('change', validateForm);
    input.addEventListener('blur', validateForm);
  });
  
  // Validar al cargar por si hay campos pre-llenados
  validateForm();
  
  // Re-validar después de que Contact Form 7 procese el formulario
  form.addEventListener('wpcf7submit', function() {
    // Esperar un poco antes de re-habilitar
    setTimeout(validateForm, 100);
  });
  
  // Re-validar si hay errores de validación de CF7
  form.addEventListener('wpcf7invalid', function() {
    validateForm();
  });
  
  // Limpiar y re-validar cuando el formulario se resetea
  form.addEventListener('wpcf7mailsent', function() {
    // Deshabilitar el botón después de enviar exitosamente
    setTimeout(() => {
      submitButton.disabled = true;
      submitButton.style.opacity = '0.5';
      submitButton.style.cursor = 'not-allowed';
    }, 100);
  });
}

export function initCF7Validation() {
  // Intentar configurar formularios inmediatamente
  const forms = document.querySelectorAll('.wpcf7-form');
  
  if (forms.length > 0) {
    console.log('✓ Formularios CF7 encontrados:', forms.length);
    forms.forEach(setupFormValidation);
  } else {
    console.log('⏳ Esperando formularios CF7...');
  }
  
  // También escuchar el evento de Contact Form 7 cuando se inicializa
  document.addEventListener('wpcf7submit', function(event) {
    const form = event.target;
    if (form && !form.classList.contains('cf7-validation-ready')) {
      form.classList.add('cf7-validation-ready');
      setupFormValidation(form);
    }
  }, false);
  
  // Observar cambios en el DOM para formularios que se cargan dinámicamente
  const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
      mutation.addedNodes.forEach(function(node) {
        if (node.nodeType === 1) { // Es un elemento
          // Buscar formularios en el nodo añadido
          if (node.classList && node.classList.contains('wpcf7-form')) {
            if (!node.classList.contains('cf7-validation-ready')) {
              node.classList.add('cf7-validation-ready');
              setupFormValidation(node);
            }
          }
          // Buscar formularios dentro del nodo
          const innerForms = node.querySelectorAll('.wpcf7-form');
          innerForms.forEach(function(form) {
            if (!form.classList.contains('cf7-validation-ready')) {
              form.classList.add('cf7-validation-ready');
              setupFormValidation(form);
            }
          });
        }
      });
    });
  });
  
  // Configurar el observer
  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
}

