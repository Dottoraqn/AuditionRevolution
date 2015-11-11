window.onload = initialize;

var project_one = {
  id: 1,
  name: "The Lion King",
  owner: "Jarrad Howell",
  project: "link"
};

var project_two = {
  id: 2,
  name: "In the Heights",
  owner: "Jarrad Howell",
  project: "link"
};

var project_three = {
  id: 3,
  name: "Wicked",
  owner: "Jarrad Howell",
  project: "link"
};

var project_four = {
  id: 4,
  name: "Babel",
  owner: "Jarrad Howell",
  project: "link"
};

var projects_array = [project_one, project_two, project_three, project_four];

function initialize() {
  load_projects(projects_array);
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

function delete_project( project ) {
  var project_id = project.id; 

  //send request to ajax to delete
  console.log("Look at me, delete me!");
}

function add_users_to_project( project ) {
  var project_id = project.id; 
  console.log("Look at me, add users to me!");
}
