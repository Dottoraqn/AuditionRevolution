window.onload = initialize;

var project_one = {
  id: 1,
  name: "The Lion King"
};

var project_two = {
  id: 2,
  name: "In the Heights"
};

var project_three = {
  id: 3,
  name: "Wicked"
};

var project_four = {
  id: 4,
  name: "Babel"
};

var projects_array = [project_one, project_two, project_three, project_four];

function initialize() {
  load_projects();
}

function load_projects() {
  console.log(projects_array);
  //for each project  in projectsArray, load into table
}

function edit_project( project ) {
  var project_id = project.id; 

  //send request to ajax to edit
  console.log("Look at me, edit me!");
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
