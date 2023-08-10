from flask import Flask
import sys

app = Flask(__name__)


@app.route("/python")
def hello_world():
    return "<p>Hello, World!</p> \n<pre><code>" + str(sys.version) + "\n" + str(sys.executable) + "\n" + str(sys.path) + "\n" + str(sys.platform) + "\n" + str(sys.version_info) + "\n" + str(sys.modules) + "</code></pre>\n"
