<div class="col-12">
    <h3>Locador</h3>

    <div class="form-group row" id="input-grup">
    </div>

    <div class="form-group row">
        <div class="col-4">
            <button class="btn btn-success" id="salva">
                Cadastra
            </button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let url_string = window.location.href;
        let url = new URL(url_string);
        let id = parseInt(url.searchParams.get("id"));

        if (id == null) {
            alert();
        } else {
            $("#enviar").click(function() {
                $.ajax({
                    type: 'POST',
                    url: '../../src/ControllerAjax/contrato.ajax.php',
                    data: {
                        "action": "atualizar",
                        "id": id
                    },
                    success: function(data) {
                        if (data == 1) {
                            $(location).attr('href', '?fld=lista&pg=contrato');
                        } else {
                            alert('erro');
                        }
                    }
                });
            });
        }



        $.ajax({
            type:'POST',
            url:'../../src/ControllerAjax/locador.ajax.php',
            data:{"action": "intup-update"},
            success: function (data) {
                $("#input-grup").append(data)
            }
        });
    })
</script>