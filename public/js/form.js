document.getElementById("name").addEventListener('keyup', slugChange);

function slugChange() {

    title = document.getElementById("name").value;
    document.getElementById("slug").value = slug(title);

}

function slug(str) {
    var $slug = '';
    var trimmed = str.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}


/* ClassicEditor
    .create(document.querySelector('#description'), {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
        heading: {
            options: [
                { model: 'paragraph', title: 'Parrafo', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Título', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'SubTítulo', class: 'ck-heading_heading2' }
            ]
        }
    })
    .catch(error => {
        console.log(error);
    }); */