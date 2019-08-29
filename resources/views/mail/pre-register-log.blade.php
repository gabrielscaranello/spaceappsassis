<style>
    * {
        margin: 0;
        padding: 0;
        font-family: roboto, sans-serif;
    }
</style>
<div style="width: 100%; background: #000; position: relative; padding-bottom: 1rem; padding-top: 1rem; border-radius: .5rem">
    <div style="text-align: center;">
        <h4 style="color: #fff; margin-bottom: 1.25rem; font-size: 1.25rem; padding: 0 1rem">
            NASA SPACE APPS ASSIS CHATEAUBRIAND 2019
        </h4>
    </div>

    <div style="text-align: left; background: #fff; border-radius: .5rem; overflow: hidden; padding: 1rem; display: block; margin: 1rem;font-size: 1.2rem;">
        <p>
            Nova inscrição no Space Apps Assis Chateaubriand 2019.
        </p>
        <p>
            <b>Nome:</b> {{$preregister['first_name'] ." ". $preregister['last_name']}}
        </p>
        <p>
            <b>Email:</b> {{$preregister['email']}}
        </p>
        <p>
            <b>WhatsApp: </b> {{$preregister['phone']}}
        </p>
        <p>
            <b>Instituição: </b> {{$preregister['univercity']}}
        </p>
        <div style="margin-top: 5rem;">
            <p>
                <small style="font-size: 0.7rem">Email gerado automaticamente, favor não responder.</small>
            </p>
        </div>
    </div>

    <div style="text-align: center;">
        <img src="{!!asset('img/logo.png')!!}" style="width: 8rem;display: block;margin-left: auto;margin-right: auto;margin-bottom: 1rem;" alt="Space Apps Assis Chateaubriand">
        <a target="_blank" href="https://spaceappsassis.com" style="color: #fff; text-decoration: none; font-weight: bold;">spaceappsassis.com</a>
    </div>
</div>
