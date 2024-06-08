<script>

    function unicoProduto(id){

        var obj = new XMLHttpRequest();
        obj.open('GET', 'product/'+id, true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        obj.onreadystatechange = function() {
            if (obj.readyState === XMLHttpRequest.DONE) {
                if (obj.status === 200) {
                    console.log('funfou', id);
                    window.location.href = 'product/'+id;
                } else {
                    console.log('Ocorreu um erro: ' + obj.status);
                }
            }
        };
        console.log(id);
        obj.send();
    }






</script>
