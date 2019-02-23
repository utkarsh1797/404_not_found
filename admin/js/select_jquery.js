var EducationalInfo = {
	"The Blossom (IX-X Foundation)": {
		"IX": {
			"Subject": ["Subject1", "subject2", "subject3", "subject4"],
			"Batch": ["A", "B", "C", "D"]
		},
		"X": {
			"Subject": ["Subject1", "Subject2"],
			"Batch" : ["A", "B"]
		}
	},
	"The Headstart (XI-XII+PMT)": {
		"XI": {
			"Subject": ["Subject1"],
			"Batch": ["A", "B", "C"]
		},
		"X" : {
			"Subject": ["Subject1", "Subject2"],
			"Batch": ["A", "B", "C", "D"]
		}
	}
}

window.onload = function () {
	
	var courseSel = document.getElementById("course");
	var classSel = document.getElementById("class");	
	var subjectSel = document.getElementById("subject");
	var batchSel = document.getElementById("batch");
	
	courseSel.options[0] = new Option('Select Course','0');
	courseSel.selectedIndex = 0;
	for (var course in EducationalInfo) {
		courseSel.options[courseSel.options.length] = new Option(course, course);
	}
	if(batchSel == null){
		courseSel.onchange = function () {
			 classSel.length = 0;
			 classSel.options[0] = new Option('Select Class','0');
			 classSel.selectedIndex = 0;
			
			 subjectSel.length = 0;
			 subjectSel.options[0] = new Option('Select Subject','0');
			 subjectSel.selectedIndex = 0;
			 if (this.selectedIndex < 1)
				 return;
			 for (var classid in EducationalInfo[this.value]) {
				 classSel.options[classSel.options.length] = new Option(classid, classid);
			 }
		$('select').selectpicker('refresh');
		}
		classSel.onchange = function () {
			 subjectSel.length = 0;
			 subjectSel.options[0] = new Option('Select Subject','0');
			 subjectSel.selectedIndex = 0;
			 if (this.selectedIndex < 1)
				 return;
			var subjectSelects = EducationalInfo[courseSel.value][this.value]["Subject"];
			for (var i = 0; i < subjectSelects.length; i++) {
				subjectSel.options[subjectSel.options.length] = new Option(subjectSelects[i], subjectSelects[i]);
			}
			$('select').selectpicker('refresh');
		}
	}
	else {
		courseSel.onchange = function () {
			 classSel.length = 0;
			 classSel.options[0] = new Option('Select Class','0');
			 classSel.selectedIndex = 0;

			 batchSel.length = 0;
			 batchSel.options[0] = new Option('Select Batch','0');
			 batchSel.selectedIndex = 0;

			 if (this.selectedIndex < 1)
				 return;
			 for (var classid in EducationalInfo[this.value]) {
				 classSel.options[classSel.options.length] = new Option(classid, classid);
			 }
		$('select').selectpicker('refresh');
		}
		classSel.onchange = function () {
			 batchSel.length = 0;
			 batchSel.options[0] = new Option('Select Batch','0');
			 batchSel.selectedIndex = 0;

			 if (this.selectedIndex < 1)
				 return;
			 var batchSelects = EducationalInfo[courseSel.value][this.value]["Batch"];
			 for (var i = 0; i < batchSelects.length; i++) {
				batchSel.options[batchSel.options.length] = new Option(batchSelects[i], batchSelects[i]);
			 }
			$('select').selectpicker('refresh');
		}
	}
}

document.ready(function(){
	$('select').selectedIndex = 0;
});
