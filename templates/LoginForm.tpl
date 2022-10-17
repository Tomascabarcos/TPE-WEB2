{include 'header.tpl'}

    <form action="ValidarUser" method="POST" >
        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input name="email"  type="email" required class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input name="contraseña" type="password" required class="form-control" id="password" >
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>