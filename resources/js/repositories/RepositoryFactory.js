import PostRepository from './postRepository';

const repositories = {
    'posts': PostRepository
}
export default {
    get: name => repositories[name]
};