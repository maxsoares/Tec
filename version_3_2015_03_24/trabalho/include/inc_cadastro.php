<script>
    function show() {
        document.getElementById('novoProduto').style.display = 'block';
    }

    function cancel() {
        document.getElementById('novoProduto').style.display = 'none';
    }

    var xmlDoc = loadXMLDoc("./trabalho/document/produtos.xml");
    //alert("Teste:" + xmlDoc.documentElement.nodeName);

    var x = xmlDoc.getElementsByTagName("produto");

    document.write("<table><tr><th>Código</th><th>Descrição</th><th>Preço</th><th>Quantidadfe</th><th>Ação</th></tr>");
    for (i = 0; i < x.length; i++)
    {
        var y = x[i].getElementsByTagName("item");
        for (z = 0; z < y.length; z++)
        {
            document.write("</tr>");
            document.write("<td>" + x[i].getElementsByTagName("codigo")[z].childNodes[0].nodeValue + "</td>");
            document.write("<td>" + x[i].getElementsByTagName("descricao")[z].childNodes[0].nodeValue + "</td>");
            document.write("<td>" + x[i].getElementsByTagName("preco")[z].childNodes[0].nodeValue + "</td>");
            document.write("<td>" + x[i].getElementsByTagName("quantidade")[z].childNodes[0].nodeValue + "</td>");
            document.write("<td><a class=\"btn\" href>Editar</a> <a class=\"btn\" href>Excluir</a></td>");
            document.write("</tr>");
        }
    }
    document.write("</table>");

</script>
<br>
<a class="btn" href="#1" onclick=show()>Novo Produto</a>
<div id="novoProduto" style="display:none;">
    <div class="form">
        <form id="adicionarProduto" action="" method="get">
            Código: <input type="text" id="codigo"><br>
            Descrição: <input type="text" id="descricao"><br>
            Preço: <input type="text" id="´preco"><br>
            Quantidade: <input type="text" id="quantidade"><br>
            <input type="submit" value="Salvar"><br><br>
            <a class="btn" href="#1" onclick=cancel()>Cancelar</a>
        </form>            
    </div>
</div>