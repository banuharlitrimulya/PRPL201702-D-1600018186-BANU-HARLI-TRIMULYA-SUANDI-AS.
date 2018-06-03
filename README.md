1. Download [git](https://git-scm.com/downloads)
2. Masuk ke folder yang mau di upload, klik kanan pilih git bash.

![Alt Text](/src/img/01.png)

3. Tampilan awal git bash.

![Alt Text](/src/img/02.png)

4. Klik clone or download pada halaman awal repository copas linknya.

![Alt Text](/src/img/03.png)

5. Setting git bash.
- git config --global user.name "diisi username github"
- git config --global user.email "diisi email github"
- git init (untuk inisialisasi repo local)
- git add * (simbol "*" bisa diganti nama file / folder)
- git commit -m "v1" (v1 bisa diganti mirip kaya tanda perubahan yang sudah dilakukan pada file / folder project)
- git remote add origin https://github.com/wahyurusdiansyah/upload_github.git (masukan link yang tadi dicopas)

![Alt Text](/src/img/04.png)

6. Setting git bash. 
- git pull origin master --allow-unrelated-histories (tanpa --allow-xx error pas merger)

![Alt Text](/src/img/05.png)

7. kalau ketemu tampilan kaya dibawah tekan ctrl+x.

![Alt Text](/src/img/06.png)

8. Upload file yang ada di repo local ke github
-git push origin master

![Alt Text](/src/img/07.png)

9. File / folder sudah terupload

![Alt Text](/src/img/08.png)
