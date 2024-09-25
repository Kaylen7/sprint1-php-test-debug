# Sprint 1  
## Testing Tema 7
Contingut base de l'activitat:  
— `src/nivell1`  
- `tests/nivell1`  

👀 Paquets d'interès:  
- [phpunit-watcher](https://github.com/spatie/phpunit-watcher)  

---

CMD d'interès:  
- `vendor/bin/phpunit` –Si no s'especifica res més, itera `tests/`. Si s'especifica una ruta, itera des d'allà (`tests/nivell2`, passa només tests d'aquesta ruta).  
- `vendor/bin/phpunit-watcher watch` –Inicia procés que reevalua els tests cada cop que es modifica i guarda l'arxiu base o el test. Va bé per TDD.   