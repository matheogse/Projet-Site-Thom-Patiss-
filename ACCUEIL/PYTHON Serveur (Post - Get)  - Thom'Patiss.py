from flask import Flask, request, render_template

app = Flask(__name__, template_folder="C:\\Users\\mathe\\Documents\\Informatique\\Mes créations\\HTML\\Site Thom Patiss'\\ACCUEIL")

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        # Traiter la requête POST ici
        return 'Requête POST reçue'
    else:
        return render_template("HTML Fichier (Page Accueil) - Thom'Patiss.html")

if __name__ == '__main__':
    app.run(debug=True)
