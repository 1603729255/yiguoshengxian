!function(){
    var submit=document.querySelector('#btn');
	var submit1=document.querySelector('#btn1');


	var title=document.querySelector('#title');
	var question=document.querySelector('#question');
	var solve=document.querySelector('#solve');

	var title1=document.querySelector('#title1');
	var question1=document.querySelector('#question1');
	var solve1=document.querySelector('#solve1');


    var tbody=document.querySelector('tbody');
    
    //先数据库中添加数据 这边的value 给个自定义名字 传给php 再通过这个php加入到数据库中
    submit.onclick=function(){
        ajax({
            url:'php/insert.php',
            data:{
                wtitle:title.value,
                wquestion:question.value,
                wsolve:solve.value,
            },
            success:function (d) {
                alert(d)
            }
        });
    }
    
    //渲染 将数据库中的每一条数据都取出来 拼接到这个tbody里面 拼接是重点
    ajax({
        url: "php/data.php",
        success: function (response) {
           var arr=JSON.parse(response);
           var itable='';
           for(i=0;i<arr.length;i++){
               itable+='<tr index="'+arr[i].sid+'">';//给每个记录加上一个主键的名字 下面方便取到
               for(var j in arr[i]){
                    itable+='<td>'+arr[i][j]+'</td>'
               } 
               itable+='<td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>删除</button> <input type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal1" value="修改"/></td>'
               itable+='</tr>';
           }
        tbody.innerHTML=itable;  
        }
    });

    //删除 取到这个删除按钮(事件委托)  根据主键这个唯一标示(连接)
    var nowid=null;
    tbody.onclick=function(ev){
       var ev=ev||window.event;
       var ele=ev.target||ev.srcElement;
       if(ele.nodeName=='BUTTON'){
            if(confirm('你确定要删除吗？')){
                ajax({
                    url: "php/del.php",
                    data:{
                        delid:ele.parentNode.parentNode.getAttribute('index')
                    },
                });
            }
           ele.parentNode.parentNode.parentNode.removeChild(ele.parentNode.parentNode)
       }else if(ele.nodeName=='INPUT'){
            ajax({
               url: "php/update.php",
               data:{
                   updateid:ele.parentNode.parentNode.getAttribute('index')
               },
               success: function (d) {
                   var obj=JSON.parse(d);
                   console.log(obj);
                   title1.value=obj.title;
                   question1.value=obj.question;
                   solve1.value=obj.solve;
                   nowid=obj.sid;
               }
           });
       }
    }

    //修改之后的内容加入到数据库中
    submit1.onclick=function(){
        ajax({
            url: "php/update1.php",
            data:{
                utitle:title1.value,
                uquestion:question1.value,
                usolve:solve1.value,
                uid:nowid,
            },
            success: function () {
                location.reload()
            }
        });
    }


}()