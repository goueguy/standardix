
<div>
    <p>Vous recevez cet e-mail parce que vous ou quelqu'un d'autre avez demandé la réinitialisation du mot de passe de votre compte d'utilisateur sur la plateforme <a href="{{request()->url()}}" target="_blank">STANDARDIX</a></p>
</div>
<div>
    <p>Cliquez sur ce lien en dessous pour réinitiliaser votre mot de passe:</p>
    <p>
        <a href="{{request()->url()}}/reset-link/{{$data['token']}}">{{request()->url()}}/reset-link/{{$data['token']}}</a>
    </p>
    <p class="mt-3">Si vous n'avez pas demandé de réinitialisation de mot de passe, vous pouvez ignorer cet e-mail en toute sécurité.
    </p>
</div>
