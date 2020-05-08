const frontEndConf = require('./libs/front-end-config/front-end-config.js');
const blogNavbar = require('./libs/blog-navbar/blog-navbar.js');

const WINDOW_MOBILE_WIDTH = frontEndConf.general.windowSmallSize;
blogNavbar({WINDOW_MOBILE_WIDTH});
