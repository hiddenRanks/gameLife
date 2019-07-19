import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import '@ckeditor/ckeditor5-build-classic/build/translations/ko';

export default class Editor
{
    constructor() {
        this.textarea = document.querySelector("#editor");

        let option = {
            toolbar: ['heading', 'undo', 'redo', '|', 'bold', 'italic', 'link', '|', 'imageUpload'],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading1', class: 'ck-heading_paragraph' },
                    { model: 'heading2', view: 'h2', title: 'Heading2', class: 'ck-heading_paragraph' },
                    { model: 'heading3', view: 'h3', title: 'Heading3', class: 'ck-heading_paragraph' },
                    { model: 'heading4', view: 'h4', title: 'Heading4', class: 'ck-heading_paragraph' },
                    { model: 'heading5', view: 'h5', title: 'Heading5', class: 'ck-heading_paragraph' }
                ]
            },
            language: "ko"
        }

        ClassicEditor.create(this.textarea, option)
        .then(ck => {
            let list = Array.from(ck.ui.componentFactory.names());
            console.log(list);

            ck.plugins.get('FileRepository').createUploadAdapter = (loader) => new MyUploader(loader);
        }).catch(err => {
            console.log(err);
        })
    }
}