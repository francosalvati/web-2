{include file="templates/header.tpl"}


<div class="d-flex justify-content-center">
    <div class="containter w-25 m-4 text-center">
        <form method="POST" action="validate">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="user" id="pass" placeholder="pepe">
                <label for="floatingInput">usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            {if $error}
                <div class="alert alert-danger mt-3">
                    {$error}
                </div>
            {/if}
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </div>
</div>


{include file="templates/footer.tpl"}