<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="{{ URL::to('jquery.js')}}" > </script>
<style>
td{
    border:1px, solid, #000;
}
button{
    
    background-color:#007bff;
    border-color:#007bff;
    border-radius:5px;
    color:#fff;
    padding:4px 5px;
},
.btn{
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    padding: .375rem .75rem;
}
</style>
<body>

<h2>Articles working with api!!!</h2>

<input type="text" id="title"></br></br>
<textarea name="" id="description"></textarea></br>
<button class="btn btn-primary" onclick="addArticle()">Click</button>

<div id="articles"></div>

<script>

function addArticle(){    
            $.ajax({
                url: "http://127.0.0.1:8000/api/article",
                method:'POST',
                data:{
                    "title": $('#title').val(),
                    "description": $('#description').val(),
                },
                success:function(result){
                    alert('Article is added!');
                }

            });
        }

    //url:'https://jsonplaceholder.typicode.com/posts',
    function getArticles(){
        let jadval='<table>';
        $.ajax({
            method:'GET',            
            url:'http://127.0.0.1:8000/api/articles',
            
            success:function(result){
                console.log(result['data']);
        for(let i=0; i<result['data'].length; i++){
        jadval+=`<tr><td>${result['data'][i].title}</td><td>${result['data'][i].description}</td></tr>`;
            }                                      
                    jadval+='</table>';                
                    
                    document.getElementById('articles').innerHTML=jadval;
            }                                                
        });                        
    }
    

    getArticles();
</script>    
</body>
</html>
