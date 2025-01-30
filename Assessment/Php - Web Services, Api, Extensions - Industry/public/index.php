<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog API</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#articles">Articles</a></li>
                <li><a href="#comments">Comments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="categories">
            <h1>Manage Categories</h1>
            <form id="addCategoryForm">
                <input type="text" id="categoryName" placeholder="Category Name" required>
                <textarea id="categoryDescription" placeholder="Category Description" required></textarea>
                <button type="submit">Add Category</button>
            </form>
            <div id="categoryList"></div>
        </section>

        <section id="articles">
            <h1>Manage Articles</h1>
            <form id="addArticleForm">
                <input type="text" id="articleTitle" placeholder="Article Title" required>
                <textarea id="articleBody" placeholder="Article Content" required></textarea>
                <select id="articleCategory" required>
                    <option value="">Select Category</option>
                </select>
                <button type="submit">Add Article</button>
            </form>
            <div id="articleList"></div>
        </section>

        <section id="comments">
            <h1>Manage Comments</h1>
            <form id="addCommentForm">
                <input type="text" id="commentArticle" placeholder="Article ID" required>
                <textarea id="commentText" placeholder="Your Comment" required></textarea>
                <button type="submit">Add Comment</button>
            </form>
            <div id="commentList"></div>
        </section>
    </main>

    <script src="/js/scripts.js"></script>
</body>
</html>