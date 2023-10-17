#include <iostream>

// Class Induk: BangunDatar
class BangunDatar {
public:
    virtual double HitungLuas() = 0; // Fungsi untuk menghitung luas
    virtual double HitungKeliling() = 0; // Fungsi untuk menghitung keliling
};

// Class Anak: Persegi (Inheritance dari BangunDatar)
class Persegi : public BangunDatar {
private:
    double sisi;

public:
    Persegi(double s) : sisi(s) {}

    double HitungLuas() override {
        return sisi * sisi;
    }
    double HitungKeliling() override {
        return 4 * sisi;
    }
};

// Class Anak: Persegi Panjang (Inheritance dari BangunDatar)
class PersegiPanjang : public BangunDatar {
private:
    double panjang;
    double lebar;

public:
    PersegiPanjang(double p, double l) : panjang(p), lebar(l) {}

    double HitungLuas() override {
        return panjang * lebar;
    }
    double HitungKeliling() override {
        return 2 * (panjang + lebar);
    }
};

// Class Anak: Segitiga (Inheritance dari BangunDatar)
class Segitiga : public BangunDatar {
private:
    double alas;
    double tinggi;
    double sisi2;
    double sisi3;

public:
    Segitiga(double a, double t, double s2, double s3) : alas(a), tinggi(t), sisi2(s2), sisi3(s3) {}

    double HitungLuas() override {
        return 0.5 * alas * tinggi;
    }

    double HitungKeliling() override {
        return alas + sisi2 + sisi3;
    }
};

// Class Anak: Lingkaran (Inheritance dari BangunDatar)
class Lingkaran : public BangunDatar {
private:
    double jariJari;

public:
    Lingkaran(double r) : jariJari(r) {}

    double HitungLuas() override {
        return 3.14 * jariJari * jariJari;
    }

    double HitungKeliling() override {
        return 2 * 3.14 * jariJari;
    }
};

int main() {
    Persegi persegi(5.0);
    PersegiPanjang persegipanjang(4.0, 6.0);
    Segitiga segitiga(3.0, 4.0, 5.0, 2.0);
    Lingkaran lingkaran(2.5);

    std::cout << "Luas dan Keliling Persegi:" << std::endl;
    std::cout << "Luas: " << persegi.HitungLuas() << std::endl;
    std::cout << "Keliling: " << persegi.HitungKeliling() << std::endl;

    std::cout << "\nLuas dan Keliling Persegi Panjang:" << std::endl;
    std::cout << "Luas: " << persegipanjang.HitungLuas() << std::endl;
    std::cout << "Keliling: " << persegipanjang.HitungKeliling() << std::endl;

    std::cout << "\nLuas dan Keliling Segitiga:" << std::endl;
    std::cout << "Luas: " << segitiga.HitungLuas() << std::endl;
    std::cout << "Keliling: " << segitiga.HitungKeliling() << std::endl;

    std::cout << "\nLuas dan Keliling Lingkaran:" << std::endl;
    std::cout << "Luas: " << lingkaran.HitungLuas() << std::endl;
    std::cout << "Keliling: " << lingkaran.HitungKeliling() << std::endl;

    return 0;
}
