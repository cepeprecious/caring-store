// let base_url = "https://caringstore.xyz/";
let base_url = "http://localhost/caring-store/";

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
