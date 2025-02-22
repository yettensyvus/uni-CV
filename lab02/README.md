# IWNO2: Lucrul cu GIT

* **Autor:** Straton Alexandru  
* **Grupa:** IA-2302  
* **Data:** 22.02.2025  

## Scop
Familiarizarea cu utilizarea unui sistem de control al versiunilor pentru gestionarea și urmărirea modificărilor codului sursă într-un mediu colaborativ.

### 1. Descărcarea și Instalarea [GIT](https://git-scm.com/downloads)

- **Descărcarea [GIT](https://git-scm.com/downloads) pentru OS Windows**
  - Descărcarea GIT

  Am accesat site-ul oficial [GIT](https://git-scm.com/downloads) și am descărcat `Latest Source Release` pentru OS Windows.

  ![](images/brave_IRUEOxxNe0.png)  
  ![](images/brave_zHorv5O4M3.png)  

  După finalizarea descărcării, trecem la instalare.

- **Instalarea [GIT](https://git-scm.com/downloads) pe OS Windows**

  - Instalarea GIT

  > Parcurgem conform pașilor de mai jos

  ![](images/Git-2.48.1-64-bit.tmp_Fm9MEftuUM.png)  
  ![](images/Git-2.48.1-64-bit.tmp_5A2pjlwGw6.png)  

### 2. Înregistrarea contului [GitHub](https://github.com/)
 - Înregistrarea contului [GitHub](https://github.com/)

  Am accesat site-ul oficial [GitHub](https://github.com/).

  ![](images/brave_57v2kGussB.png)  

  > Tastăm pe butonul `Sign up`

  ![](images/brave_tezD1pDvHu.png)  

  > Introducem credențialele contului

  ![](images/brave_xN23rmVojz.png)  

  > Confirmăm cu adăugarea codului de pe email

  ![](images/brave_t2VuApDUoq.png)  

  > Ne logăm cu login și parolă

  ![](images/brave_8NkT38VX9Q.png)  

  Am finalizat crearea contului GitHub.

### 3. Crearea unui proiect
 - Crearea unui *repository* pe GitHub
    - Tastăm butonul `Create repository`  
      ![](images/brave_QAPT53Jwz5.png)  

    - Introducem datele repository-ului  
      ![](images/brave_Nlod4yvOka.png)  

### 4. Clonarea repository-ului pe calculatorul local
 1. În repository-ul creat tastăm Code -> Local -> Clone -> HTTPS, copiem link-ul.  
      ![](images/brave_mV2xh2XhXF.png)  

 2. Deschidem Visual Studio sau alt IDE dorit.  
      ![](images/Code_hHy9M8at6v.png)  

      > Introducem comanda pentru clonare în consolă

```bash
git clone https://github.com/straton-alex/straton-alex.git
```

  > Creăm o ramură nouă `lab01`

```bash
git checkout -B lab01
```

  > În folderul clonat, creăm alt folder `images`

```bash
mkdir images
```

  3. Redactarea README.md

  > Introducem informație în README.md

    ## Hey 👋, I'm Alexandru Straton!
  
  <table>
    <tr>
      <td width="150">
        <img src="/lab02/images/avatar.jpg" width="120" height="120" style="border-radius: 50%;" alt="Avatar">
      </td>
      <td>
        <h2>Hey 👋, I'm Alexandru Straton!</h2>
        <p>
          I’m an IT student 💻. With a strong motivation to work in the technology and business industry. 
          Seeking to gain insight and experience in software and web development, networking, and professional growth. 
          I consider myself a curious person in the world of technology and I’m always learning as much information as possible 
          to increase my knowledge and technical skills in this field.
        </p>
      </td>
    </tr>
  </table>
  
  <h2 align="left" id="straton-alex">Favorite Tech</h2>
  
  > Programming Languages.
  
  <table>
    <tr>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/sql.svg" width="48" height="48" alt="SQL" />
        </a>
        <br>SQL
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/dot_net.svg" width="48" height="48" alt="C#" />
        </a>
        <br>C#
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/java.svg" width="48" height="48" alt="java" />
        </a>
        <br>JAVA
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/js.svg" width="48" height="48" alt="js" />
        </a>
        <br>JS
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/css.svg" width="48" height="48" alt="css" />
        </a>
        <br>CSS
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/html.svg" width="48" height="48" alt="html" />
        </a>
        <br>HTML
      </td>
    </table>
  
  > IDE's, Tools and other things that I like to work with.
  
  <table>
    <tr>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/vs_code.svg" width="48" height="48" alt="vs-code" />
        </a>
        <br>VS Code
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/vs_studio.svg" width="48" height="48" alt="vs-studio" />
        </a>
        <br>VS Studio
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/android_studio.svg" width="48" height="48" alt="android-studio" />
        </a>
        <br>Android
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/my_sql.svg" width="48" height="48" alt="mySQL-workbench" />
        </a>
        <br>MySQL
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/photoshop.svg" width="48" height="48" alt="photoshop" />
        </a>
        <br>Photoshop 
      </td>
      </td>
      <td align="center" width="96">
        <a href="#straton-alex">
          <img src="/lab02/images/debian.svg" width="48" height="48" alt="debian" />
        </a>
        <br>Debian
  </table>
  
  > Languages I'm Learning.
  
  <table>
    <tr>
      <td align="center" width="150">
        <img src="/lab02/images/spring.png" width="48" height="48" alt="Spring Framework" />
        <br>Spring Framework
      </td>
      <td align="center" width="150">
        <img src="/lab02/images/python.svg" width="48" height="48" alt="Python" />
        <br>Python
      </td>
    </tr>
  </table>
  
  > Languages I Want to Learn.
  
  <table>
    <tr>
      <td align="center" width="150">
        <img src="/lab02/images/go.png" width="48" height="48" alt="Go" />
        <br>Go
      </td>
      <td align="center" width="150">
        <img src="/lab02/images/rust.png" width="48" height="48" alt="Rust" />
        <br>Rust
      </td>
    </tr>
  </table>
  
  <h2 align="left" id="straton-alex">Contacts</h2>
  
  <table>
    <tr>
      <td align="left" width="24">
        <img src="/lab02/images/outlook.png" width="24" height="24" alt="Outlook" />
      </td>
      <td align="left">
        <a href="mailto:straton.alexandru@usm.md">straton.alexandru@usm.md</a>
      </td>
    </tr>
  </table>

### 5. Publicarea codului pe GitHub

> Publicăm codul pe GitHub

```bash
# adăugăm toate fișierele pentru tracking
git add *
# verificăm statusul
git status
# creăm un commit
git commit -m "structure defined"
# împingem commit-ul în repository-ul remote
git push -u origin lab01
# realizăm merge pentru lab01
git merge lab01
# împingem în branch-ul principal
git push origin main
```
![](images/Code_BQu4zAxehW.png)  

### 6. Concluzie

Prin această lucrare, am reușit să ne familiarizăm cu utilizarea GIT ca sistem de control al versiunilor și integrarea acestuia cu GitHub pentru gestionarea eficientă a proiectelor. Am parcurs pașii esențiali, de la instalarea și configurarea GIT, crearea și clonarea unui repository, până la editarea unui fișier README.md și publicarea codului pe GitHub.

În plus, am utilizat Visual Studio Code pentru a lucra cu repository-ul local și am aplicat comenzi GIT fundamentale precum `clone`, `checkout`, `commit`, `push` și `merge`. Această experiență contribuie la dezvoltarea abilităților necesare pentru colaborarea eficientă în proiecte software, facilitând versionarea codului și organizarea muncii într-un mediu profesional.

> Link-ul către repository [Alex Straton](https://github.com/straton-alex/straton-alex)

### 7. Bibliografie

*1. Curs Moodle USM, Containerizarea și Virtualizarea*

*2. GitHub Docs – https://docs.github.com/*

*3. Markdown Guide – https://www.markdownguide.org/*