export default class PostItem {
    constructor(el) {
        this.el = el
        this.post = this.getPost();
        this.postsEl = el.querySelector('[data-catalog-post]');
        this.commentsEl = el.querySelector('[data-comments]');
        
        this.getItem()
        this.getComments()
    }
    
    getPost() {
        const url = new URL(window.location.href)
        
        return +url.searchParams.get('id')
    }
    
    async getItem() {
        const url = `https://jsonplaceholder.typicode.com/posts/${this.post}`
        try {
            const res = await fetch(url);
    
            if (res.ok) {
                const json = await res.json();

                if (json) {
                    this.renderPost(json)
                }
            }
            else {
                throw new Error('Произошла ошибка')
            }
        }
        catch(exception) {
            throw new Error(exception)
        }
    }

    renderPost(item) {
        this.postsEl.innerHTML =
            `<h3 class="post-card__title">${item.title}</h3>
            <div class="post-card__body">${item.body}</div>`
    }
    
    async getComments() {
        const url = `https://jsonplaceholder.typicode.com/posts/${this.post}/comments`
        try {
            const res = await fetch(url);

            if (res.ok) {
                const json = await res.json();
                
                if (json) {
                    this.renderComments(json)
                }
            } 
            else {
                throw new Error('Произошла ошибка')
            }
        } 
        catch(exception) {
            throw new Error(exception)
        }
    }

    renderComments(items) {
        let html = ''
        
        items.forEach(item => {
            html += ` 
            <div class="comment">
                <div class="user_info">
                    <div class="comment__name">
                        ${item.name}
                    </div>
                    
                    <div class="comment__email">
                        ${item.email}
                    </div>
                </div>
                
                <div class="comment__body">
                    ${item.body}
                </div>
            </div>
            `
        })
        
        this.commentsEl.innerHTML = html
    }
}