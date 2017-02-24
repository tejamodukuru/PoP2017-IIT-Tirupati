import sys
import re

def lex(characters, token_exprs):
    pos = 0
    tokens = []
    while pos < len(characters):
        match = None
        for token_expr in token_exprs:
            pattern, tag = token_expr
            regex = re.compile(pattern)
            match = regex.match(characters, pos)
            if match:
                text = match.group(0)
                if tag:
                    token = (text, tag)
                    tokens.append(token)
                break
        if not match:
            sys.stderr.write('Illegal character: %s\\n\n' % characters[pos])
            sys.exit(1)
        else:
            pos = match.end(0)
    return tokens

RESERVED = 'RESERVED'
INT      = 'INT'
ID       = 'ID'
BLOCKBEGIN = 'BLOCKBEGIN'
BLOCKEND = 'BLOCKEND'
token_exprs = [
    (r'[ \n\t]+',              None),
    (r'#[^\n]*',               None),
    (r'namespace',                    RESERVED),
    (r'function',                    RESERVED),
    (r'<\?hh',                    RESERVED),
    (r'\=',                    RESERVED),
    (r'\(',                    RESERVED),
    (r'\)',                    RESERVED),
    (r';',                     RESERVED),
    (r'\+',                    RESERVED),
    (r'-',                     RESERVED),
    (r'\*',                    RESERVED),
    (r'/',                     RESERVED),
    (r'<=',                    RESERVED),
    (r'<',                     RESERVED),
    (r'>=',                    RESERVED),
    (r'>',                     RESERVED),
    (r'=',                     RESERVED),
    (r'!=',                    RESERVED),
    (r'{',                     BLOCKBEGIN),
    (r'}',                     BLOCKEND),
    (r'and',                   RESERVED),
    (r'or',                    RESERVED),
    (r'not',                   RESERVED),
    (r'if',                    RESERVED),
    (r'then',                  RESERVED),
    (r'else',                  RESERVED),
    (r'while',                 RESERVED),
    (r'do',                    RESERVED),
    
    (r'[0-9]+',                INT),
    (r'[$A-Za-z][A-Za-z0-9_]*',ID),
]

def imp_lex(characters):
    return lex(characters, token_exprs)


if __name__ == '__main__':
    filename = sys.argv[1]
    file = open(filename)
    characters = file.read()
    file.close()
    tokens = imp_lex(characters)
    for token in tokens:
        print token
