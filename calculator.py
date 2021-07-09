from flask import Flask

app = Flask(__name__)

@app.route("/api/discountCalculator/<year>")
def process(year=None):
    year = int(year)
    if year > 3 :
        discount = "30"
    elif year > 2 :
        discount = "20"
    elif year > 1 :
        discount = "10"
    else :
        discount = "0"
    return discount

if __name__ == "__main__":
    app.run(debug=True,
            host='127.0.0.1',
            port=8080)
