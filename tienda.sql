--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.6
-- Dumped by pg_dump version 9.6.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: tienda; Type: DATABASE; Schema: -; Owner: admintienda
--

CREATE DATABASE tienda WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';


ALTER DATABASE tienda OWNER TO admintienda;

\connect tienda

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: autores; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE autores (
    id_autor integer NOT NULL,
    nombre character varying(20) NOT NULL,
    apellido character varying(20) NOT NULL
);


ALTER TABLE autores OWNER TO admintienda;

--
-- Name: autores_id_autor_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE autores_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE autores_id_autor_seq OWNER TO admintienda;

--
-- Name: autores_id_autor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE autores_id_autor_seq OWNED BY autores.id_autor;


--
-- Name: autoresxcomics; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE autoresxcomics (
    id_autor integer NOT NULL,
    id_comic integer NOT NULL
);


ALTER TABLE autoresxcomics OWNER TO admintienda;

--
-- Name: autoresxcomics_id_autor_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE autoresxcomics_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE autoresxcomics_id_autor_seq OWNER TO admintienda;

--
-- Name: autoresxcomics_id_autor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE autoresxcomics_id_autor_seq OWNED BY autoresxcomics.id_autor;


--
-- Name: autoresxcomics_id_comic_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE autoresxcomics_id_comic_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE autoresxcomics_id_comic_seq OWNER TO admintienda;

--
-- Name: autoresxcomics_id_comic_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE autoresxcomics_id_comic_seq OWNED BY autoresxcomics.id_comic;


--
-- Name: comics; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE comics (
    id_comic integer NOT NULL,
    titulo character varying(30) NOT NULL,
    cantidad smallint NOT NULL,
    precio smallint NOT NULL,
    url character varying(30) NOT NULL,
    descripcion character varying(240) NOT NULL,
    id_editorial integer NOT NULL,
    id_descuento integer NOT NULL
);


ALTER TABLE comics OWNER TO admintienda;

--
-- Name: comics_id_comic_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE comics_id_comic_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE comics_id_comic_seq OWNER TO admintienda;

--
-- Name: comics_id_comic_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE comics_id_comic_seq OWNED BY comics.id_comic;


--
-- Name: comics_id_descuento_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE comics_id_descuento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE comics_id_descuento_seq OWNER TO admintienda;

--
-- Name: comics_id_descuento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE comics_id_descuento_seq OWNED BY comics.id_descuento;


--
-- Name: comics_id_editorial_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE comics_id_editorial_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE comics_id_editorial_seq OWNER TO admintienda;

--
-- Name: comics_id_editorial_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE comics_id_editorial_seq OWNED BY comics.id_editorial;


--
-- Name: descuento; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE descuento (
    id_descuento integer NOT NULL,
    descuento smallint NOT NULL
);


ALTER TABLE descuento OWNER TO admintienda;

--
-- Name: descuento_id_descuento_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE descuento_id_descuento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE descuento_id_descuento_seq OWNER TO admintienda;

--
-- Name: descuento_id_descuento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE descuento_id_descuento_seq OWNED BY descuento.id_descuento;


--
-- Name: direccion; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE direccion (
    id_direccion integer NOT NULL,
    ciudad character varying(20) NOT NULL,
    calle character varying(30) NOT NULL,
    numero character varying(5) NOT NULL,
    numero_int character varying(4) NOT NULL,
    colonia character varying(30) NOT NULL,
    delegacion character varying(25) NOT NULL,
    cp smallint NOT NULL,
    id_usuario integer NOT NULL
);


ALTER TABLE direccion OWNER TO admintienda;

--
-- Name: direccion_id_direccion_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE direccion_id_direccion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE direccion_id_direccion_seq OWNER TO admintienda;

--
-- Name: direccion_id_direccion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE direccion_id_direccion_seq OWNED BY direccion.id_direccion;


--
-- Name: direccion_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE direccion_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE direccion_id_usuario_seq OWNER TO admintienda;

--
-- Name: direccion_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE direccion_id_usuario_seq OWNED BY direccion.id_usuario;


--
-- Name: editoriales; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE editoriales (
    id_editorial integer NOT NULL,
    nombre character varying(20) NOT NULL
);


ALTER TABLE editoriales OWNER TO admintienda;

--
-- Name: editoriales_id_editorial_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE editoriales_id_editorial_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE editoriales_id_editorial_seq OWNER TO admintienda;

--
-- Name: editoriales_id_editorial_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE editoriales_id_editorial_seq OWNED BY editoriales.id_editorial;


--
-- Name: tipousuario; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE tipousuario (
    id_tipo smallint NOT NULL,
    tipo character varying(7)
);


ALTER TABLE tipousuario OWNER TO admintienda;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE usuarios (
    id_usuario integer NOT NULL,
    nombre character varying(20) NOT NULL,
    appaterno character varying(20) NOT NULL,
    apmaterno character varying(20) NOT NULL,
    telefono character varying(10) NOT NULL,
    correo character varying(40) NOT NULL,
    usuario character varying(20) NOT NULL,
    contrasena character varying(32) NOT NULL,
    id_tipo integer NOT NULL
);


ALTER TABLE usuarios OWNER TO admintienda;

--
-- Name: usuarios_id_tipo_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE usuarios_id_tipo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuarios_id_tipo_seq OWNER TO admintienda;

--
-- Name: usuarios_id_tipo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE usuarios_id_tipo_seq OWNED BY usuarios.id_tipo;


--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE usuarios_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuarios_id_usuario_seq OWNER TO admintienda;

--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE usuarios_id_usuario_seq OWNED BY usuarios.id_usuario;


--
-- Name: venta; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE venta (
    id_venta integer NOT NULL,
    fecha date NOT NULL,
    id_usuario integer NOT NULL
);


ALTER TABLE venta OWNER TO admintienda;

--
-- Name: venta_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE venta_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE venta_id_usuario_seq OWNER TO admintienda;

--
-- Name: venta_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE venta_id_usuario_seq OWNED BY venta.id_usuario;


--
-- Name: venta_id_venta_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE venta_id_venta_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE venta_id_venta_seq OWNER TO admintienda;

--
-- Name: venta_id_venta_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE venta_id_venta_seq OWNED BY venta.id_venta;


--
-- Name: ventaxcomics; Type: TABLE; Schema: public; Owner: admintienda
--

CREATE TABLE ventaxcomics (
    id_comic integer NOT NULL,
    id_venta integer NOT NULL,
    cantidad smallint NOT NULL
);


ALTER TABLE ventaxcomics OWNER TO admintienda;

--
-- Name: ventaxcomics_id_comic_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE ventaxcomics_id_comic_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ventaxcomics_id_comic_seq OWNER TO admintienda;

--
-- Name: ventaxcomics_id_comic_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE ventaxcomics_id_comic_seq OWNED BY ventaxcomics.id_comic;


--
-- Name: ventaxcomics_id_venta_seq; Type: SEQUENCE; Schema: public; Owner: admintienda
--

CREATE SEQUENCE ventaxcomics_id_venta_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ventaxcomics_id_venta_seq OWNER TO admintienda;

--
-- Name: ventaxcomics_id_venta_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admintienda
--

ALTER SEQUENCE ventaxcomics_id_venta_seq OWNED BY ventaxcomics.id_venta;


--
-- Name: autores id_autor; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY autores ALTER COLUMN id_autor SET DEFAULT nextval('autores_id_autor_seq'::regclass);


--
-- Name: autoresxcomics id_autor; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY autoresxcomics ALTER COLUMN id_autor SET DEFAULT nextval('autoresxcomics_id_autor_seq'::regclass);


--
-- Name: autoresxcomics id_comic; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY autoresxcomics ALTER COLUMN id_comic SET DEFAULT nextval('autoresxcomics_id_comic_seq'::regclass);


--
-- Name: comics id_comic; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY comics ALTER COLUMN id_comic SET DEFAULT nextval('comics_id_comic_seq'::regclass);


--
-- Name: comics id_editorial; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY comics ALTER COLUMN id_editorial SET DEFAULT nextval('comics_id_editorial_seq'::regclass);


--
-- Name: comics id_descuento; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY comics ALTER COLUMN id_descuento SET DEFAULT nextval('comics_id_descuento_seq'::regclass);


--
-- Name: descuento id_descuento; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY descuento ALTER COLUMN id_descuento SET DEFAULT nextval('descuento_id_descuento_seq'::regclass);


--
-- Name: direccion id_direccion; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY direccion ALTER COLUMN id_direccion SET DEFAULT nextval('direccion_id_direccion_seq'::regclass);


--
-- Name: direccion id_usuario; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY direccion ALTER COLUMN id_usuario SET DEFAULT nextval('direccion_id_usuario_seq'::regclass);


--
-- Name: editoriales id_editorial; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY editoriales ALTER COLUMN id_editorial SET DEFAULT nextval('editoriales_id_editorial_seq'::regclass);


--
-- Name: usuarios id_usuario; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('usuarios_id_usuario_seq'::regclass);


--
-- Name: usuarios id_tipo; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY usuarios ALTER COLUMN id_tipo SET DEFAULT nextval('usuarios_id_tipo_seq'::regclass);


--
-- Name: venta id_venta; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY venta ALTER COLUMN id_venta SET DEFAULT nextval('venta_id_venta_seq'::regclass);


--
-- Name: venta id_usuario; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY venta ALTER COLUMN id_usuario SET DEFAULT nextval('venta_id_usuario_seq'::regclass);


--
-- Name: ventaxcomics id_comic; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY ventaxcomics ALTER COLUMN id_comic SET DEFAULT nextval('ventaxcomics_id_comic_seq'::regclass);


--
-- Name: ventaxcomics id_venta; Type: DEFAULT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY ventaxcomics ALTER COLUMN id_venta SET DEFAULT nextval('ventaxcomics_id_venta_seq'::regclass);


--
-- Data for Name: autores; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO autores VALUES (1, 'Stan', 'Lee');


--
-- Name: autores_id_autor_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('autores_id_autor_seq', 1, true);


--
-- Data for Name: autoresxcomics; Type: TABLE DATA; Schema: public; Owner: admintienda
--



--
-- Name: autoresxcomics_id_autor_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('autoresxcomics_id_autor_seq', 1, false);


--
-- Name: autoresxcomics_id_comic_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('autoresxcomics_id_comic_seq', 1, false);


--
-- Data for Name: comics; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO comics VALUES (2, 'Amazing spiderman', 2, 320, 'img_comics/spiderman.jpeg', 'Nueva aventura de spiderman #34', 1, 1);
INSERT INTO comics VALUES (3, 'Civil War', 3, 400, 'img_comics/civil_war.jpeg', 'Todos los super heroes reunidos pero divididos', 1, 1);


--
-- Name: comics_id_comic_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('comics_id_comic_seq', 3, true);


--
-- Name: comics_id_descuento_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('comics_id_descuento_seq', 1, false);


--
-- Name: comics_id_editorial_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('comics_id_editorial_seq', 1, false);


--
-- Data for Name: descuento; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO descuento VALUES (1, 0);
INSERT INTO descuento VALUES (2, 10);
INSERT INTO descuento VALUES (3, 15);
INSERT INTO descuento VALUES (4, 20);
INSERT INTO descuento VALUES (5, 25);
INSERT INTO descuento VALUES (6, 30);
INSERT INTO descuento VALUES (7, 35);
INSERT INTO descuento VALUES (8, 40);
INSERT INTO descuento VALUES (9, 45);
INSERT INTO descuento VALUES (10, 50);


--
-- Name: descuento_id_descuento_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('descuento_id_descuento_seq', 10, true);


--
-- Data for Name: direccion; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO direccion VALUES (6, 'Mexico', 'Rancho', '106', '1', 'Campestre', 'Coyoacan', 4890, 9);
INSERT INTO direccion VALUES (7, 'Mexico', 'Rancho', '106', '1', 'Campestre', 'Coyoacan', 4890, 10);


--
-- Name: direccion_id_direccion_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('direccion_id_direccion_seq', 7, true);


--
-- Name: direccion_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('direccion_id_usuario_seq', 1, false);


--
-- Data for Name: editoriales; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO editoriales VALUES (1, 'Marvel');
INSERT INTO editoriales VALUES (2, 'DC comics');
INSERT INTO editoriales VALUES (3, 'Panini');
INSERT INTO editoriales VALUES (4, 'Avatar Press');
INSERT INTO editoriales VALUES (5, 'Image Comics');


--
-- Name: editoriales_id_editorial_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('editoriales_id_editorial_seq', 5, true);


--
-- Data for Name: tipousuario; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO tipousuario VALUES (1, 'admin');
INSERT INTO tipousuario VALUES (2, 'venta');
INSERT INTO tipousuario VALUES (3, 'cliente');


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO usuarios VALUES (9, 'Andre', '', 'Loyola', '78980909', 'andreortiz11@hotmail.com', 'admin', '1c7a92ae351d4e21ebdfb897508f59d6', 1);
INSERT INTO usuarios VALUES (10, 'Max', 'Meshoulam', 'Alamilla', '78980909', 'sasd@kjksj.com', 'matt', '1c7a92ae351d4e21ebdfb897508f59d6', 3);
INSERT INTO usuarios VALUES (11, 'Luis', 'Ortiz', 'Loyola', '', 'asjabd@jkhs.com', 'luisolm', '1c7a92ae351d4e21ebdfb897508f59d6', 2);


--
-- Name: usuarios_id_tipo_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('usuarios_id_tipo_seq', 1, false);


--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('usuarios_id_usuario_seq', 11, true);


--
-- Data for Name: venta; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO venta VALUES (26, '2018-05-20', 10);
INSERT INTO venta VALUES (27, '2018-05-20', 10);


--
-- Name: venta_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('venta_id_usuario_seq', 1, false);


--
-- Name: venta_id_venta_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('venta_id_venta_seq', 27, true);


--
-- Data for Name: ventaxcomics; Type: TABLE DATA; Schema: public; Owner: admintienda
--

INSERT INTO ventaxcomics VALUES (2, 26, 2);
INSERT INTO ventaxcomics VALUES (3, 26, 1);


--
-- Name: ventaxcomics_id_comic_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('ventaxcomics_id_comic_seq', 1, false);


--
-- Name: ventaxcomics_id_venta_seq; Type: SEQUENCE SET; Schema: public; Owner: admintienda
--

SELECT pg_catalog.setval('ventaxcomics_id_venta_seq', 1, false);


--
-- Name: autores autores_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY autores
    ADD CONSTRAINT autores_pkey PRIMARY KEY (id_autor);


--
-- Name: comics comics_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY comics
    ADD CONSTRAINT comics_pkey PRIMARY KEY (id_comic);


--
-- Name: descuento descuento_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY descuento
    ADD CONSTRAINT descuento_pkey PRIMARY KEY (id_descuento);


--
-- Name: direccion direccion_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY direccion
    ADD CONSTRAINT direccion_pkey PRIMARY KEY (id_direccion);


--
-- Name: editoriales editoriales_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY editoriales
    ADD CONSTRAINT editoriales_pkey PRIMARY KEY (id_editorial);


--
-- Name: tipousuario tipousuario_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY tipousuario
    ADD CONSTRAINT tipousuario_pkey PRIMARY KEY (id_tipo);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id_usuario);


--
-- Name: venta venta_pkey; Type: CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY venta
    ADD CONSTRAINT venta_pkey PRIMARY KEY (id_venta);


--
-- Name: autoresxcomics autoresxcomics_id_autor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY autoresxcomics
    ADD CONSTRAINT autoresxcomics_id_autor_fkey FOREIGN KEY (id_autor) REFERENCES autores(id_autor) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: autoresxcomics autoresxcomics_id_comic_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY autoresxcomics
    ADD CONSTRAINT autoresxcomics_id_comic_fkey FOREIGN KEY (id_comic) REFERENCES comics(id_comic) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: comics comics_id_descuento_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY comics
    ADD CONSTRAINT comics_id_descuento_fkey FOREIGN KEY (id_descuento) REFERENCES descuento(id_descuento) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: comics comics_id_editorial_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY comics
    ADD CONSTRAINT comics_id_editorial_fkey FOREIGN KEY (id_editorial) REFERENCES editoriales(id_editorial) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: direccion direccion_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY direccion
    ADD CONSTRAINT direccion_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: direccion direccion_id_usuario_fkey1; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY direccion
    ADD CONSTRAINT direccion_id_usuario_fkey1 FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: usuarios usuarios_id_tipo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_id_tipo_fkey FOREIGN KEY (id_tipo) REFERENCES tipousuario(id_tipo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: venta venta_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY venta
    ADD CONSTRAINT venta_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: ventaxcomics ventaxcomics_id_comic_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY ventaxcomics
    ADD CONSTRAINT ventaxcomics_id_comic_fkey FOREIGN KEY (id_comic) REFERENCES comics(id_comic) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: ventaxcomics ventaxcomics_id_venta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admintienda
--

ALTER TABLE ONLY ventaxcomics
    ADD CONSTRAINT ventaxcomics_id_venta_fkey FOREIGN KEY (id_venta) REFERENCES venta(id_venta) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: autores; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT,UPDATE ON TABLE autores TO ventatienda;


--
-- Name: autores_id_autor_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE autores_id_autor_seq TO ventatienda;


--
-- Name: autoresxcomics; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT ON TABLE autoresxcomics TO ventatienda;


--
-- Name: autoresxcomics_id_autor_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE autoresxcomics_id_autor_seq TO ventatienda;


--
-- Name: autoresxcomics_id_comic_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE autoresxcomics_id_comic_seq TO ventatienda;


--
-- Name: comics; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE comics TO ventatienda;
GRANT SELECT,UPDATE ON TABLE comics TO clientetienda;


--
-- Name: comics_id_comic_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE comics_id_comic_seq TO ventatienda;


--
-- Name: comics_id_descuento_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE comics_id_descuento_seq TO ventatienda;


--
-- Name: comics_id_editorial_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE comics_id_editorial_seq TO ventatienda;


--
-- Name: descuento; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT ON TABLE descuento TO ventatienda;


--
-- Name: direccion; Type: ACL; Schema: public; Owner: admintienda
--

GRANT INSERT ON TABLE direccion TO ventatienda;
GRANT SELECT,INSERT ON TABLE direccion TO clientetienda;


--
-- Name: direccion_id_direccion_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE direccion_id_direccion_seq TO ventatienda;
GRANT USAGE ON SEQUENCE direccion_id_direccion_seq TO clientetienda;


--
-- Name: direccion_id_usuario_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE direccion_id_usuario_seq TO ventatienda;
GRANT USAGE ON SEQUENCE direccion_id_usuario_seq TO clientetienda;


--
-- Name: editoriales; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT,UPDATE ON TABLE editoriales TO ventatienda;
GRANT SELECT ON TABLE editoriales TO clientetienda;


--
-- Name: tipousuario; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT ON TABLE tipousuario TO clientetienda;


--
-- Name: usuarios; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT,DELETE ON TABLE usuarios TO ventatienda;
GRANT SELECT,INSERT ON TABLE usuarios TO clientetienda;


--
-- Name: usuarios_id_tipo_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE usuarios_id_tipo_seq TO clientetienda;


--
-- Name: usuarios_id_usuario_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE usuarios_id_usuario_seq TO clientetienda;


--
-- Name: venta; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT ON TABLE venta TO ventatienda;
GRANT SELECT,INSERT ON TABLE venta TO clientetienda;


--
-- Name: venta_id_usuario_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE venta_id_usuario_seq TO ventatienda;
GRANT USAGE ON SEQUENCE venta_id_usuario_seq TO clientetienda;


--
-- Name: venta_id_venta_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE venta_id_venta_seq TO ventatienda;
GRANT USAGE ON SEQUENCE venta_id_venta_seq TO clientetienda;


--
-- Name: ventaxcomics; Type: ACL; Schema: public; Owner: admintienda
--

GRANT SELECT,INSERT ON TABLE ventaxcomics TO ventatienda;
GRANT SELECT,INSERT ON TABLE ventaxcomics TO clientetienda;


--
-- Name: ventaxcomics_id_comic_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE ventaxcomics_id_comic_seq TO ventatienda;
GRANT USAGE ON SEQUENCE ventaxcomics_id_comic_seq TO clientetienda;


--
-- Name: ventaxcomics_id_venta_seq; Type: ACL; Schema: public; Owner: admintienda
--

GRANT USAGE ON SEQUENCE ventaxcomics_id_venta_seq TO ventatienda;
GRANT USAGE ON SEQUENCE ventaxcomics_id_venta_seq TO clientetienda;


--
-- PostgreSQL database dump complete
--

