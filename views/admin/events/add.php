<div class="page">
    <div class="container-fluid">

        <!-- Advanced Select2 -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Cadastro de Eventos</h2>
                    </div>
                    <div class="body">
                        <form action="<?= BASE_URL; ?>Event/store" method="post">

                            <fieldset>
                                <legend>Informações</legend>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nome: (*)</label>
                                            <input type="text" class="form-control" name="name" id="name" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 ">

                                        <label for="description">descrição: (*)</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            required="">
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="date">Data: (*)</label>
                                            <input type="date" class="form-control" name="date" id="date" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="time">Horas: (*)</label>
                                            <input type="time" class="form-control phone-number" name="time" id="time"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                            <label for="local">local:</label>
                                            <input type="text" class="form-control" name="local" id="local"
                                                required="">
                                        </div>
                                    </div>  
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="image">Imagem (*)</label>
                                            <input type="file" class="form-control" name="image" id="iamge">
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="frame_map">link de incorporação do Mapa (*)</label>
                                            <input type="text" class="form-control" name="frame_map" id="frame_map">
                                        </div>
                                    </div>
                                </div>

                    </div>








                </div>


                </fieldset>
                <div class="row clearfix">

                    <div class="col-lg-12 col-md-6">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>
</div>

<!-- cidades e estado padrão -->
<script>
const default_state = ["", "", ""];
const default_city = "";
</script>