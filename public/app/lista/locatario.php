<div class="col-12" style="height: 500px; overflow:auto;">
    <h3>Locatário</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

</div>

<script>
    $(document).ready(function(){
        
        $.ajax({
            type:'POST',
            url:'../../src/ControllerAjax/locatario.ajax.php',
            data:{"action": "ler"},
            success: function (data) {
                $("tbody").append(data)
            }
        });
       
        

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });
</script>