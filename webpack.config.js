const path = require('path');

module.exports = {
    mode: "development", //개발모드
    entry: { 
        app: "./index.js",
        editor: "./editor.js"
    },
    output:{
        "path": path.join(__dirname, "/public/js")
    },
    module: {
        rules: [
            {
                test: /\.css$/, //모든문장.css 로 될 경우 아래 모듈을 사용한다.
                use: ['style-loader', 'css-loader']
            }
        ]
    }
}
