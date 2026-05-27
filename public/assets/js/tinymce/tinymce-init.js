tinymce.init({
  selector: 'textarea.tinymce',
  license_key: 'gpl',
  height: 400,
  menubar: false,
  plugins: [
    'lists',
    'link',
    'image',
    'code',
    'table',
    'wordcount'
  ],
  toolbar: `
    undo redo | blocks |
    bold italic underline |
    alignleft aligncenter alignright |
    bullist numlist |
    link image table |
    code
  `,
  branding: false
});