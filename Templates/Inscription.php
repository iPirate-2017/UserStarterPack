<form action="PHP/add_user.php" method="post">
  <div class="center">
    <ul class="demo-list-item mdl-list">
      <li class="mdl-list__item">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="email" type="mail" id="email">
          <label class="mdl-textfield__label" for="email">Email...</label>
        </div>
      </li>
      <li class="mdl-list__item">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="password" type="text" id="password">
          <label class="mdl-textfield__label" for="password">Mot de passe...</label>
        </div>
      </li>
      <li class="mdl-list__item">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="nom" type="text" id="nom">
          <label class="mdl-textfield__label" for="nom">Nom...</label>
        </div>
      </li>
      <li class="mdl-list__item">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="prenom" type="text" id="prenom">
          <label class="mdl-textfield__label" for="prenom">Prénom...</label>
        </div>
      </li>
      <li class="mdl-list__item">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="tel" type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" id="tel">
          <label class="mdl-textfield__label" for="tel">Téléphone...</label>
          <span class="mdl-textfield__error">Le format n'est pas valide</span>
        </div>
      </li>
      <li class="mdl-list__item">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="date_naissance" type="text" id="date_naissance" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}">
          <label class="mdl-textfield__label" for="date_naissance">Date de naissance... format(dd/mm/aaaa)</label>
          <span class="mdl-textfield__error">Le format n'est pas valide</span>
        </div>
        <br/>
      </li>
      <li class="btn-center mdl-list__item">
        <br/><br/>
        <input class="mdl-js-ripple-effect mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" value="S'inscrire">
      </li>
    </ul>
  </div>
</form>
