window.onload = initialize;


function initialize() {
  //load_projects(projects_array);
}

function load_projects() {
    var len = projects_array.length;
    for(var i=0; i<len; i++) {
      var newRow="<tr><td>" + projects_array[i]['name'] + "</td><td>" 
                  + projects_array[i]['owner'] + "</td>"
                  + "<td><a href='#' onclick='javascript:edit_project(" + projects_array[i]['id'] + ");'"
                   + ">Edit</a></td>";
      $('#projects tbody').append(newRow);
    }  
}

function edit_project( project_id ) {
    $('#edit').modal('show');
}

function startProject() {
    $('#startProject').modal('show');
}

function delete_project( project ) {
  var project_id = project.id; 

  //send request to ajax to delete
  console.log("Look at me, delete me!");
}

function add_users_to_project( project ) {
  var project_id = project.id; 
  console.log("Look at me, add users to me!");
}
