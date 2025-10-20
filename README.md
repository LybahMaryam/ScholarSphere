# 🎓 ScholarSphere  
**Connect, Debate, Learn; Unleash Scholarly Excellence**

---

## 🌐 Overview

**ScholarSphere** is a modern academic collaboration platform that connects scholars and thinkers from around the world.  
It allows users to **create posts, engage in debates, share knowledge, and use AI-powered tools like text summarization** to enhance research productivity.

Originally developed as a **Final Year Project (FYP)**, ScholarSphere represents a step toward building a professional scholarly community platform.

---

## ✨ Key Features

- 🏠 **Home Page** — Displays latest posts and discussions  
- 🗣️ **Post Creation** — Share ideas, theories, or debate topics  
- 👤 **Profile Creation** — Create your scholarly profile with bio and links  
- 📋 **Profile Index** — Browse other scholars’ profiles  
- 🧠 **AI Summarizer** — Summarize long research text using Flask + Transformers  
- 📚 **E-Library** — Access academic content and resources  
- 🔐 **Authentication** — Secure register and login pages  

---
## 🖼️ Screenshots

| Page | Preview |
|------|----------|
| 🏠 Home Page | ![Home Page](public/Screenshots/HomePage1.png) |
| 🗣️ Posts | ![Posts](public/Screenshots/PostPage.png) |
| 📋 Profile Index | ![Profile Index](public/Screenshots/IndexPage.png) |
| 🔐 Login & Register | ![Login](public/Screenshots/AuthPage.png) |
| 📚 E-Library | ![E-Library](public/Screenshots/elibraryPage.png) |


## ⚙️ Tech Stack

| Layer | Technology |
|:------|:------------|
| Backend | **Laravel 9.52 (PHP 8)** |
| Frontend | **Blade Templates + Bootstrap 5.3** |
| AI Service | **Flask (Python) + Hugging Face Transformers** |
| Database | **MySQL** |
| Styling | **Vintage-inspired UI with custom CSS** |

---

## 🧠 Flask Summarization Service

ScholarSphere integrates a Flask API that uses the **DistilBART** model from Hugging Face to generate concise summaries.

### `app.py`
```python
from flask import Flask, request, jsonify
from transformers import pipeline

app = Flask(__name__)

summarizer = pipeline('summarization', model='sshleifer/distilbart-cnn-12-6')

@app.route('/summarize', methods=['POST'])
def summarize():
    data = request.json
    text = data.get('text', '')
    if not text:
        return jsonify({"error": "No text provided"}), 400
    summary = summarizer(text, max_length=150, min_length=50, do_sample=False)
    return jsonify({"summary": summary[0]['summary_text']})
         
if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5052, debug=True)
