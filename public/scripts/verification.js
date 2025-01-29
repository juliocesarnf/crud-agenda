document.getElementById( 'form' ).addEventListener( 'submit' , function(event) {
    const inputField = document.getElementById('phone');
    const value = inputField.value;
    const isValid = /^[0-9]+$/.test(value);
    if ( !isValid)  {
      alert('Por favor, digite apenas números no campo telefone.');
      event.preventDefault();
    }
  } );