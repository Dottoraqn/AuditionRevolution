window.onload = initialize;

var projectOne = {
  id: 1,
  name: "The Lion King",
};

var projectTwo = {
  id: 2,
  name: "In the Heights",
};

var projectsArray = [projectOne, projectTwo];

function initialize() {
  load_projects();
}

function load_projects() {
  //for each project  in projectsArray, load into table
}

function edit_project( project ) {
  var project_id = project.id; 

  //send request to ajax to edit
}

function delete_project( project ) {
  var project_id = project.id; 

  //send request to ajax to delete
}

function add_users_to_project( project ) {
  var project_id = project.id; 
}
