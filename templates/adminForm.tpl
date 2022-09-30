
{include file="templates/header.tpl"}

<div class="container w-100">

                <div class="card d-flex justify-content-center mt-4name">
                    <div class="container d-flex justify-content-center my-4 py-4">
                    <div class="col-md-8 col-lg-10">
                        <h4 class="mb-3">Agregar Album</h4>
                            <form id="form-album" method="GET">
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="firstName" class="form-label">Nombre del Album</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Albumnazo" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="firstName" class="form-label">Nombre de la banda</label>
                                        <input type="text" class="form-control" name="banda" placeholder="La banda del Lechuga" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    
                            
                                <div class="col-8">
                                    <label for="email" class="form-label">Genero</label>
                                    <input type="text" class="form-control" name="genero" placeholder="Rock">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                            
                            <div class="col-4">
                                <label for="address" class="form-label">Año</label>
                                <input type="text" class="form-control" name="año" placeholder="1990" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                                <div class="col-12">
                                <label for="address2" class="form-label">image URL</label>
                                <input type="text" class="form-control" name="imgURL" placeholder="http/:...">
                            </div>
                            
                        </div>

                        <hr class="my-4">
                        
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Agregar Album</button>
                    </form>
                </div>
                    </div>
                </div>
            </div>

{include file="templates/footer.tpl"}