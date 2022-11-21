document.getElementById("addBtn").addEventListener("click", btnswitch); //save button

function btnswitch() {
  //SWITCH BUTTONS
  document.getElementById("save-btn").style.display = "block";
  document.getElementById("update-btn").style.display = "none";
  document.getElementById("delete-btn").style.display = "none";
}
//display data in modal
function edit(id) {
  document.getElementById("delete-btn").style.display = "block";
  document.getElementById("update-btn").style.display = "block";
  document.getElementById("save-btn").style.display = "none";
  //input
//   let test = document.getElementById(id);
//   title.value = test.children[1].children[0].innerHTML;
//   if (test.children[1].children[2].children[2].innerHTML == "feature") {
//     feature.checked = true;
//   } else {
//     bug.checked = true;
//   }
//   taskid.value = id;
//   description.value = test.children[1].children[1].children[1].innerHTML;
//   priority.value = test.children[1].children[2].children[1].getAttribute('dataPriority');
//   date.value = test.children[1].children[1].children[0].innerHTML.slice(-10);
  
//   // test is the id of the task , id is the id of the status (to-do-tasks)
//   if (test.parentElement.id == "to-do-tasks") {
//     status.value = 1;
//   } else if (test.parentElement.id == "in-progress-tasks") {
//     status.value = 2;
//   } else if (test.parentElement.id == "done-tasks") {
//     status.value = 3;
//   }
}