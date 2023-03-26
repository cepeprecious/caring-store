let base_url = "https://caringstore.xyz/";

// $.ajax({
// 	url: `${base_url}get_all_questions`,
// 	type: 'POST',
// 	success: function(res) {
// 		let questions = JSON.parse(res);
// 		let question_html = '';
// 		for (let i = 0; i < questions.length; i++) {
// 			question_html += `<div class="question-box">`;
// 			question_html += `<p>${questions[i].question_text}</p>`;
// 			question_html += `</div>`;
// 		}
// 		$('#question_box').append(question_html);
// 	}
// });

function archiveQuestions() {
    fetch(`${base_url}archivequestion`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            question_id: 'your_question_id'
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // code to display the data in your HTML here
    });
}
window.onload = archiveQuestions;
