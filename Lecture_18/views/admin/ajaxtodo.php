<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Todo list</h1>        
</div>

<div class="row">
<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4"> 
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" name="myform" id="myform" onsubmit="event.preventDefault(); savetododata()">
            <div class="row">
                <div class="col-5">
                    <input type="text"  class="form-control" name="todo_title" id="todo_title">
                </div>
                <div class="col-5">
                    <select name="status" class="form-control" id="status">
                        <option value="Panding">Panding</option>
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>
                    </select> 
                </div>
                <div class="col-2">
                    <input type="submit"value="Add" class="btn btn-primary" name="todolist" id="todolist">
                    </div>
                </div>
            </form>
            
            <script>
            function savetododagit ta(params){
                console.log("savetododata called");
                var result = {};
                $.each($('#myform').serializeArray(), function() {
                    result[this.name] = this.value;
                });
                console.log(result);    
                fetch("http://localhost/PHP___LEC/Lecture_19/inserttodo",{
                method: 'POST',
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                },
                body: JSON.stringify(result)
            }).then((res)=>res.json()).then((result)=>{
                // result[this.name] = this.value;
                autoload();
            })
            }
            
            function updatetododata(todoid){

                console.log("updatetododata called",todoid);

                var result = {};
                $.each($('#myform').serializeArray(), function() {
                    result[this.name] = this.value;
                });

                // console.log(result);

                    fetch("http://localhost/PHP___LEC/Lecture_19/updatetodo?id="+todoid,{
                    method: 'POST',
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(result)
                    }).then((res)=>res.json()).then((result)=>{
                        autoload();
                        if(result != ""){
                            var myForm = document.getElementById('myForm');
                            document.getElementById("todolist").value = "add";
                            myForm.setAttribute('onsubmit',`event.preventDefault(); savetododata()`);
                            }
                     
                        // console.log(result); 
                     })
            }
            
            function delatetododata(todoid){
                    fetch("http://localhost/PHP___LEC/Lecture_19/delatetodo?id="+todoid,{
                    method: 'POST',
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    }}).then((res)=>res.json()).then((result)=>{
                    // result[this.name] = this.value;
                    if(result!= ""){
                        alert("Delate Successfully");
                    }

                    autoload();
                    
                })

            }


                function getdatabyid(id){
                console.log("edit",id);
                    let url="http://localhost/PHP___LEC/Lecture_19/gettododatabyid?id="+id;
                    fetch(url).then((res)=>res.json()).then((result)=>{
                        console.log(result.Data[0].todo_title);
                        document.getElementById('todo_title').value=result.Data[0].todo_title

                        drpval=["Pending","Active","Completed"];
                        drpoption=""

                        drpval.forEach(element=>{
                            if(result.Data[0].status ==element){                                
                            drpoption +=`<option selected>${element}</option>`


                            }else{
                            drpoption +=`<option >${element}</option>`

                            }

                        });
                        document.getElementById("status").innerHTML=drpoption
                        var myform = document.getElementById('myform');
                        document.getElementById("todolist").value="update";
                        myform.setAttribute('onsubmit',`event.preventDefault(); updatetododata(${result.Data[0].id})`);
                
                    })
            } 

            window.addEventListener('load', function () { 
                    autoload();
                })

            function autoload(){
                let url="http://localhost/PHP___LEC/Lecture_19/alltododata";
                    fetch(url).then((res)=>res.json()).then((result)=>{
                        console.log(result.Data);

                        var HTMLTableBodyTododata=""
                        result.Data.forEach(element => {
                            // console.log(element.todo_title);
                        HTMLTableBodyTododata +=`<tr>
                        <td>${element.id}</td>
                        <td>${element.todo_title}</td>
                        <td>${element.status}</td>
                        <td><button class="btn btn-primary" onclick="getdatabyid(${element.id})">Edit</button></td>
                        <td><button class="btn btn-danger" onclick="delatetododata(${element.id})">Delate</button></td>
                        </tr>`
                        });
                        document.getElementById("disptodo").innerHTML=HTMLTableBodyTododata
                    })
            }
                
        </script>
        </div>
    </div>
</div>
</div> 
<!-- Content Row -->
<div class="row">
<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4"> 
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" >
                <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="padding-left: 38%;">
                    <div class="input-group">
                        <input type="text" name="search_value" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" require="">
                        <div class="input-group-append">
                            <button type="submit" value="search" name ="search" class="btn btn-primary">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                            
                        </div>
                    </div>
                </div>
        </form>
        
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Srno</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delate</th>
                            <!-- <th>Contact_number</th>
                            <th>Date_of_birth</th>
                            <th>Action</th> -->
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Srno</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delate</th>

                            <!-- <th>Id</th>
                            <th>User_name</th>
                            <th>Email</th>
                            <th>Contact_number</th>
                            <th>Date_of_birth</th>
                            <th>Action</th> -->
                        </tr>
                    </tfoot>
                    <tbody id="disptodo">
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
<!-- /.container-fluid -->

