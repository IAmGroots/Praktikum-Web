
import os
#POSTTEST 4
#Program Kalkulator Konversi Satuan Panjang

#untuk memanggil menu
def menu():
    print("|=================================|")
    print("|======KONVERSI SATUAN PANJANG======|")
    print("1.) pilih satuan panjang")
    print("2.) pilih ingin dikonversi ke dan tampilkan hasil ")
    print("3.) EXIT PROGRAM ")
    print("|=================================|")
    print("|=================================|")

loop = True

while(loop == True) :
    menu()

    pilihMEnu = int(input("Pilih Menu : "))

    if(pilihMEnu == 1) :
      os.system("cls")
      #untuk memilih satuan panjang yang anda akan konversi
      pilih = int(input("""
      pilih satuan panjang yang ingin di konversi :
      1. km
      2. hm
      3. dam
      4. m
      5. dm
      6. cm
      7. mm

      pilih 1 sampai 7 :

      """))

      if(pilih == 1) :
        km = float(input("masukan nilai dalam km : "))
        hm = km * 10
        dam = km * 100
        m = km * 1000 
        dm = km * 10000
        cm = km * 100000
        mm = km * 1000000

      elif(pilih == 2) :
        hm = float(input("masukan nilai dalam hm : "))
        km = hm / 10
        dam = hm * 10
        m = hm * 100
        dm = hm * 1000
        cm = hm * 10000
        mm = hm * 100000
      
      elif(pilih == 3) :
        dam = float(input("masukan nilai dalam dam : "))
        km = dam / 100
        hm = dam / 10
        m = dam * 10
        dm = dam * 100
        cm = dam * 1000
        mm = dam * 10000

      elif(pilih == 4) :
        m = float(input("masukan nilai dalam m : "))
        km = m / 1000
        hm = m / 100
        dam = m / 10
        dm = m * 10
        cm = m * 100
        mm = m * 1000
      
      elif(pilih == 5) :
        dm = float(input("masukan nilai dalam dm : "))
        km = dm / 10000
        hm = dm / 1000
        dam = dm / 100
        m = dm / 10
        cm = dm * 10
        mm = dm * 100

      elif(pilih == 6) :
        cm = float(input("masukan nilai dalam cm : "))
        km = cm / 100000
        hm = cm / 10000
        dam = cm / 1000
        m = cm / 100
        dm = cm / 10
        mm = cm * 10
      
      elif(pilih == 7) :
        mm = float(input("masukan nilai dalam mm : "))
        km = mm / 1000000
        hm = mm / 100000
        dam = mm / 10000
        m = mm / 1000
        dm = mm / 100
        cm = mm / 10
      
      else :
        print("pilihan tidak ada")
        

      print("------------------------")
      print("Data Berhasil Dimasukan")
      print("Silahkan Pilih Menu ke 2")
      print("Untuk Memilih ingin di konversi ke")
      print("Dan Menampilkan Hasil")
      print("------------------------")

    if(pilihMEnu == 2) :
      os.system("cls")

      #untuk memilih satuan yang anda pilih tadi ingin di konversi ke mana
      pilih2 = int(input("""
      ingin di konversi ke :
      1. km
      2. hm
      3. dam
      4. m
      5. dm
      6. cm
      7. mm 

      pilih 1 sampai 7 :

      """)) 

      if(pilih2 == 1) :
       print("Nilai km : ", km, "km")
      elif(pilih2 == 2) :
       print("Nilai hm : ", hm, "hm")
      elif(pilih2 == 3) :
       print("Nilai dam : ", dam, "dam")
      elif(pilih2 == 4) :
       print("Nilai m : ", m, "m")
      elif(pilih2 == 5) :
       print("Nilai dm : ", dm, "dm")
      elif(pilih2 == 6) :
       print("Nilai cm : ", cm, "cm")
      elif(pilih2 == 7) :
       print("Nilai mm : ", mm, "mm")
      else :
       print("pilihan tidak ada")

    if(pilihMEnu == 3) :

      #untuk memberhentikan program dengan memilih menu "EXIT PROGRAM" 
      os.system("cls")
      loop = False

    if pilihMEnu < 1 or pilihMEnu > 3:
        os.system("cls")
        print("inputan tidak jelas.")