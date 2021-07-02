/* let commentForm = document.getElementById('new-comment');
let template = document.getElementById('comment-template');
let commentIput = document.getElementById('new-com-input');
let commentList = document.getElementById('comments');

commentForm.onsubmit = function(e) {
    e.preventDefault();
    
    newComment.textContent = commentIput.value;
    commentIput.value = '';
    commentList.append(newComment);
}
function createComment() {
    let newComment = document.createElement('li');
    let avatar = document.createElement('aside');
    avatar.classList.add('avatar');
    let avatarImg = document.createElement('img');
    avatarImg.classList.add('comment-user-avatar');
}
 */

let viewCommentBtn = document.querySelector('#view-items');
let addCommentBtn = document.querySelector('#add-item');
let comments = document.querySelector('.items'); 
let newCommentForm = document.querySelector('.new-item');

addCommentBtn.onclick = function() { 
    addCommentBtn.classList.add('added');
    viewCommentBtn.classList.remove('added');
    comments.classList.add('hidden');
    newCommentForm.classList.remove('hidden');
}
viewCommentBtn.onclick = function() {
    viewCommentBtn.classList.add('added');
    addCommentBtn.classList.remove('added');
    comments.classList.remove('hidden');
    newCommentForm.classList.add('hidden');
}

let commentIput = document.getElementById('new-com-input');
var inputBool = false;
commentIput.oninput = function() {
    inputBool = true;
}
commentIput.onclick = function() {
    if (!inputBool) {
        commentIput.value = '';
    }
    
}
