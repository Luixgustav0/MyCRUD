const url = "api.php";
const toastTrigger = document.getElementById('liveToastBtn');
const toastLiveExample = document.getElementById('liveToast');
if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    toastTrigger.addEventListener(
        'click', 
        () => {
            toastBootstrap.show();
        }
    );
}
function alertToast (text) {
    document.getElementById("a9e7598a7b929b1e27cc3000e566d1f8e").innerHTML = text;
    document.getElementById("liveToastBtn").click();
}
function aef022b06068e1826d3afd5dd72dc0234 () {
    info = {
        tkn: "a8c834a3832864f642b092cff8fc351de",
        name: document.getElementById("a2a3f7b6b60a1188d38badbbceeb4942b").value,
        tel: document.getElementById("ad333cc022f42feca2382670a3459fc8e").value
    };
    $.ajax({
        type : 'POST',
        url  : url,
        data : info,
        dataType: 'json',
        success: function(array) {
            if (array != undefined && array.text != undefined) {
                alertToast(array.text);
            }
        },
        error: function() {
            alertToast("Falha na conexão da API.");
        }
    });
}
function a5b3ae50f90732304364aca36130591ed () {
    info = {
        tkn: "a1b55ed3809ba19ffeee1dc8ca5a19371",
        search: document.getElementById("a04c546d2fbf6bd477e84a7cea085b766").value
    };
    $.ajax({
        type : 'POST',
        url  : url,
        data : info,
        dataType: 'json',
        success: function(array) {
            content = `<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th width="5%">#</th>
                    </tr>
                </thead>
                <tbody>`;
                for (i = 0; i < array.length; i++) {
                    content += `<tr>
                        <td>${array[i].name}</td>
                        <td>${array[i].tel}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-light btn-sm" onClick="a7712651936664f358b90cbfbc393e916(${array[i].id});"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-outline-danger btn-sm" onClick="afa8cf7ea9e1d3b2b19f98b6c89fb7737(${array[i].id});"><i class="bi bi-trash"></i></button>
                        </td>

                    </tr>`;
                }
                if (array.text != undefined) {
                    content += `<tr>
                        <td colspan="3">${array.text}</td>
                    </tr>`;
                }
            content += `</tbody>
            </table>`;
            document.getElementById("a173828664d4b0c946be8f74009648c37").innerHTML = content;
        },
        error: function() {
            alertToast("Falha na conexão da API.");
        }
    });
}
function a7712651936664f358b90cbfbc393e916 (id) {
    info = {
        tkn: "a1b55ed3809ba19ffeee1dc8ca5a19371",
        id: id
    };
    $.ajax({
        type : 'POST',
        url  : url,
        data : info,
        dataType: 'json',
        success: function(array) {
            document.getElementById("a728d86b9d173551ed5e6ecf09ade5fa9").value = array[0].id;
            document.getElementById("a165519115addca61182b4c06b2139341").value = array[0].name;
            document.getElementById("a80729e01e67c08615314c3f0a7965999").value = array[0].tel;
            
        },
        error: function() {
            alertToast("Falha na conexão da API.");
        }
    });
    document.getElementById("ad38a7c208a67d5fefba5fa07b098143e").click();
}
function ac214939974bd2a8ee9f2fc21eea52dbc (id) {
    info = {
        tkn: "a1cb839f3825658c18733be488e970131",
        id: id,
        name: document.getElementById("a165519115addca61182b4c06b2139341").value,
        tel: document.getElementById("a80729e01e67c08615314c3f0a7965999").value
    };
    $.ajax({
        type : 'POST',
        url  : url,
        data : info,
        dataType: 'json',
        success: function(array) {
            if (array.text != undefined) {
                alertToast(array.text);
                document.getElementById("aebd44c0cff01a496c65083dac78d6623").click();
            }
        },
        error: function() {
            alertToast("Falha na conexão da API.");
        }
    });
    document.getElementById("a25d34a59b8b9fa90212bb3e6d7ecddf5").click();
}
function afa8cf7ea9e1d3b2b19f98b6c89fb7737 (id) {
    info = {
        tkn: "a68bf0add39a92a08b813e0fbe900606d",
        id: id
    };
    $.ajax({
        type : 'POST',
        url  : url,
        data : info,
        dataType: 'json',
        success: function(array) {
            if (array.text != undefined) {
                alertToast(array.text);
                document.getElementById("aebd44c0cff01a496c65083dac78d6623").click();
            }
        },
        error: function() {
            alertToast("Falha na conexão da API.");
        }
    });
}