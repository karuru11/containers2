<div class="nav-bar" id="TopNav">
  <header>
    <a href="/ar/">
      <div class="branding-logo pricing">
          <img src="img/logocrp.png">
      </div>
    </a>
    <nav class="site-navigation">
      <ul>
        <li><a id="headerTools" class="link-pricing" href="#inicio">Inicio</a></li>
        <li><a id="headerPricing" class="link-pricing" href="#requisitos">Requisitos</a></li>
        <li><a id="headerSupportLnk" class="link-pricing" href="#ventajas">Ventajas</a></li>
        <li><a id="headerSupportLnk" class="link-pricing" href="#web">Pagina Web</a></li>
        <li><a id="headerSupportLnk" class="link-pricing" href="#contrato">Contrato</a></li>
        <li><a id="headerSupportLnk" class="link-pricing" href="#videos">Videos informativos</a></li>
      </ul>
      <div class="spinner-master2 responsive-menu-toggler">
        <input type="checkbox" id="spinner-form2" onclick="enableResponsive()" />
        <label for="spinner-form2" class="spinner-spin2">
          <div class="spinner2 diagonal part-1"></div>
          <div class="spinner2 horizontal"></div>
          <div class="spinner2 diagonal part-2"></div>
        </label>
      </div>              
    </nav>
  </header>
</div>
<script>
    // Get the button, and when the user clicks on it, execute myFunction
document.getElementById("btn-expand").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("expand-learning").classList.toggle("show-learning-items");
  document.getElementById("btn-expand").classList.toggle("rotate-icon");
}
</script>