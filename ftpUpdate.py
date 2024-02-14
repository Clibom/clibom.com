import os
from ftplib import FTP


def ftp_upload(ftp, local_path, remote_path):
    for root, dirs, files in os.walk(local_path):
        for name in files:
            local_file_path = os.path.join(root, name)
            remote_file_path = os.path.join(remote_path, os.path.relpath(local_file_path, local_path))
            with open(local_file_path, 'rb') as local_file:
                ftp.storbinary(f"STOR {remote_file_path}", local_file)


def ftp_remove(ftp, remote_path):
    try:
        file_list = ftp.nlst(remote_path)
        for file_name in file_list:
            try:
                ftp.delete(file_name)
            except Exception as e:
                print(f"Erreur lors de la suppression du fichier {file_name}: {e}")
        # Supprimer le dossier lui-même
        ftp.rmd(remote_path)
    except Exception as e:
        print(f"Erreur lors de la suppression du dossier {remote_path}: {e}")


def main():
    ftp_host = "ftp.cluster029.hosting.ovh.net"
    ftp_user = "clibomd"
    ftp_password = "UnMVBbepwhzn1y4rpvsa"
    local_directory = "/home/clibom/Documents/DEV/CLIBOM/clibom-com/src"
    assets_img_directory = "/www/assets/css/images"
    assets_directory = "/www/assets"
    image_directory = "/www/images"

    # Se connecter au serveur FTP
    with FTP(ftp_host) as ftp:
        ftp.login(ftp_user, ftp_password)

        # Supprimer le contenu du dossier distant
        ftp_remove(ftp, assets_img_directory)
        ftp_remove(ftp, assets_directory)
        ftp_remove(ftp, image_directory)

        # Envoyer tous les fichiers du dossier local vers le dossier distant
        # ftp_upload(ftp, local_directory, remote_directory)


if __name__ == "__main__":
    main()
