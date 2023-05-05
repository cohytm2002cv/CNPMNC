
function check() {
  if(document.getElementById('Pass').value ===
          document.getElementById('Passcf').value) {
      document.getElementById('message').innerHTML = "match";
  } else {
      document.getElementById('message').innerHTML = "no match";
  }
}
