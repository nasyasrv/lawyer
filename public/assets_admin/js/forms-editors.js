'use strict';

document.addEventListener('DOMContentLoaded', function () {
    // Quill untuk Tambah Artikel
    const createEditor = new Quill('#snow-editor', {
        bounds: '#snow-editor',
        modules: {
            formula: true,
            toolbar: '#snow-toolbar'
        },
        theme: 'snow'
    });

    const oldContentCreate = document.querySelector('#oldContent');
    if (oldContentCreate) {
        createEditor.clipboard.dangerouslyPasteHTML(oldContentCreate.value);
    }

    const formCreate = document.querySelector('#formArticle');
    if (formCreate) {
        formCreate.addEventListener('submit', function (e) {
            const html = createEditor.root.innerHTML.trim();
            const text = createEditor.getText().trim();

            if (text.length === 0) {
                e.preventDefault();
                alert("Isi artikel tidak boleh kosong.");
                return;
            }

            document.querySelector('#content').value = html;
        });
    }

    // Quill Editor untuk setiap modal edit
    if (window.legalOpinis && Array.isArray(window.legalOpinis)) {
        window.legalOpinis.forEach(function (item) {
            const editorId = `#snow-editor-edit-${item.id}`;
            const toolbarId = `#snow-toolbar-edit-${item.id}`;
            const contentInputId = `#contentEdit${item.id}`;
            const oldContentInputId = `#oldContentEdit${item.id}`;
            const formId = `#formArticleEdit${item.id}`;

            const quill = new Quill(editorId, {
                bounds: editorId,
                modules: {
                    formula: true,
                    toolbar: toolbarId
                },
                theme: 'snow'
            });

            const oldContent = document.querySelector(oldContentInputId);
            if (oldContent) {
                quill.clipboard.dangerouslyPasteHTML(oldContent.value);
            }

            const form = document.querySelector(formId);
            if (form) {
                form.addEventListener('submit', function (e) {
                    const html = quill.root.innerHTML.trim();
                    const text = quill.getText().trim();

                    if (text.length === 0) {
                        e.preventDefault();
                        alert("Isi artikel tidak boleh kosong.");
                        return;
                    }

                    const contentInput = document.querySelector(contentInputId);
                    if (contentInput) {
                        contentInput.value = html;
                    }
                });
            }
        });
    }
});
