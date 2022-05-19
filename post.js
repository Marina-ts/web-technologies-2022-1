import PostItem from "./components/postItem.js";

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init)
} else {
    init()
}

function init() {
    new PostItem(document.getElementById('post'))
}