#!/usr/bin/env bash
# ==============================================================================
# Script de lancement local - Site Association Humanitaire Le Petit Nicolas
# ==============================================================================

PORT=8085
DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "--------------------------------------------------------"
echo " Association Humanitaire Le Petit Nicolas"
echo " Serveur local : http://127.0.0.1:${PORT}"
echo "--------------------------------------------------------"

# Vérifier si le serveur écoute déjà sur ce port
if ss -tlpn | grep -q ":${PORT} "; then
    echo "Serveur PHP déjà actif sur le port ${PORT}."
else
    echo "Démarrage du processus serveur PHP en arrière-plan..."
    setsid php -S "127.0.0.1:${PORT}" -t "${DIR}" </dev/null >/tmp/petit_nicolas_server.log 2>&1 &
    sleep 0.8
fi

# Ouverture automatique dans le navigateur web par défaut
if command -v xdg-open > /dev/null 2>&1; then
    echo "Ouverture du site dans votre navigateur..."
    xdg-open "http://127.0.0.1:${PORT}" >/dev/null 2>&1 &
fi

echo "Site accessible sur : http://127.0.0.1:${PORT}"
