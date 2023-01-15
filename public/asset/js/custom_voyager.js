function tinymce_init_callback(editor) {
    editor.remove();
    editor = null;
    tinymce.init({
        selector: 'textarea.richTextBox',
        min_height: 600,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
            'table', 'emoticons', 'template', 'help'
        ],
        toolbar: 'styles| bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image| ' +
            'forecolor backcolor emoticons |table |FontSize | code ',
        menubar: false,
        
    });
}
