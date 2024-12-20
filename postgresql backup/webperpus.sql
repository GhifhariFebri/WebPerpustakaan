PGDMP  0    0    	        
    |            perpustakaanweb    16.3    16.3 G    >           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            @           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            A           1262    29851    perpustakaanweb    DATABASE     �   CREATE DATABASE perpustakaanweb WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Indonesia.1252';
    DROP DATABASE perpustakaanweb;
                postgres    false            �            1259    30238    buku_kategoris    TABLE     �   CREATE TABLE public.buku_kategoris (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    buku_id bigint NOT NULL,
    kategori_id bigint NOT NULL
);
 "   DROP TABLE public.buku_kategoris;
       public         heap    postgres    false            �            1259    30237    buku_kategoris_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.buku_kategoris_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.buku_kategoris_id_seq;
       public          postgres    false    231            B           0    0    buku_kategoris_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.buku_kategoris_id_seq OWNED BY public.buku_kategoris.id;
          public          postgres    false    230            �            1259    30205    bukus    TABLE     i  CREATE TABLE public.bukus (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    nama character varying(255) NOT NULL,
    tanggal_terbit date NOT NULL,
    penulis character varying(255) NOT NULL,
    penerbit character varying(255) NOT NULL,
    sinopsis character varying(255) NOT NULL
);
    DROP TABLE public.bukus;
       public         heap    postgres    false            �            1259    30204    bukus_id_seq    SEQUENCE     u   CREATE SEQUENCE public.bukus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.bukus_id_seq;
       public          postgres    false    225            C           0    0    bukus_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.bukus_id_seq OWNED BY public.bukus.id;
          public          postgres    false    224            �            1259    30181    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    30180    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            D           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    30214 	   kategoris    TABLE     �   CREATE TABLE public.kategoris (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    nama character varying(255) NOT NULL
);
    DROP TABLE public.kategoris;
       public         heap    postgres    false            �            1259    30213    kategoris_id_seq    SEQUENCE     y   CREATE SEQUENCE public.kategoris_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.kategoris_id_seq;
       public          postgres    false    227            E           0    0    kategoris_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.kategoris_id_seq OWNED BY public.kategoris.id;
          public          postgres    false    226            �            1259    30157 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    30156    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            F           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    30174    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    30221 
   peminjamen    TABLE     M  CREATE TABLE public.peminjamen (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    tanggal_peminjaman date NOT NULL,
    tanggal_pengembalian date NOT NULL,
    buku_id bigint NOT NULL,
    user_id bigint NOT NULL,
    status character varying(255) NOT NULL
);
    DROP TABLE public.peminjamen;
       public         heap    postgres    false            �            1259    30220    peminjamen_id_seq    SEQUENCE     z   CREATE SEQUENCE public.peminjamen_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.peminjamen_id_seq;
       public          postgres    false    229            G           0    0    peminjamen_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.peminjamen_id_seq OWNED BY public.peminjamen.id;
          public          postgres    false    228            �            1259    30193    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    30192    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            H           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    30164    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    role character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    30163    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            I           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217                       2604    30241    buku_kategoris id    DEFAULT     v   ALTER TABLE ONLY public.buku_kategoris ALTER COLUMN id SET DEFAULT nextval('public.buku_kategoris_id_seq'::regclass);
 @   ALTER TABLE public.buku_kategoris ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230    231            |           2604    30208    bukus id    DEFAULT     d   ALTER TABLE ONLY public.bukus ALTER COLUMN id SET DEFAULT nextval('public.bukus_id_seq'::regclass);
 7   ALTER TABLE public.bukus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225            y           2604    30184    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            }           2604    30217    kategoris id    DEFAULT     l   ALTER TABLE ONLY public.kategoris ALTER COLUMN id SET DEFAULT nextval('public.kategoris_id_seq'::regclass);
 ;   ALTER TABLE public.kategoris ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            w           2604    30160    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            ~           2604    30224    peminjamen id    DEFAULT     n   ALTER TABLE ONLY public.peminjamen ALTER COLUMN id SET DEFAULT nextval('public.peminjamen_id_seq'::regclass);
 <   ALTER TABLE public.peminjamen ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            {           2604    30196    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223            x           2604    30167    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            ;          0    30238    buku_kategoris 
   TABLE DATA           Z   COPY public.buku_kategoris (id, created_at, updated_at, buku_id, kategori_id) FROM stdin;
    public          postgres    false    231   tU       5          0    30205    bukus 
   TABLE DATA           n   COPY public.bukus (id, created_at, updated_at, nama, tanggal_terbit, penulis, penerbit, sinopsis) FROM stdin;
    public          postgres    false    225   �U       1          0    30181    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   �V       7          0    30214 	   kategoris 
   TABLE DATA           E   COPY public.kategoris (id, created_at, updated_at, nama) FROM stdin;
    public          postgres    false    227   �V       ,          0    30157 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   FW       /          0    30174    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    219   X       9          0    30221 
   peminjamen 
   TABLE DATA           �   COPY public.peminjamen (id, created_at, updated_at, tanggal_peminjaman, tanggal_pengembalian, buku_id, user_id, status) FROM stdin;
    public          postgres    false    229    X       3          0    30193    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   �X       .          0    30164    users 
   TABLE DATA           {   COPY public.users (id, name, email, email_verified_at, password, role, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �X       J           0    0    buku_kategoris_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.buku_kategoris_id_seq', 9, true);
          public          postgres    false    230            K           0    0    bukus_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.bukus_id_seq', 6, true);
          public          postgres    false    224            L           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            M           0    0    kategoris_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.kategoris_id_seq', 4, true);
          public          postgres    false    226            N           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 8, true);
          public          postgres    false    215            O           0    0    peminjamen_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.peminjamen_id_seq', 5, true);
          public          postgres    false    228            P           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            Q           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 3, true);
          public          postgres    false    217            �           2606    30243 "   buku_kategoris buku_kategoris_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.buku_kategoris
    ADD CONSTRAINT buku_kategoris_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.buku_kategoris DROP CONSTRAINT buku_kategoris_pkey;
       public            postgres    false    231            �           2606    30212    bukus bukus_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.bukus
    ADD CONSTRAINT bukus_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.bukus DROP CONSTRAINT bukus_pkey;
       public            postgres    false    225            �           2606    30189    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            �           2606    30191 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            �           2606    30219    kategoris kategoris_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.kategoris
    ADD CONSTRAINT kategoris_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.kategoris DROP CONSTRAINT kategoris_pkey;
       public            postgres    false    227            �           2606    30162    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            �           2606    30226    peminjamen peminjamen_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.peminjamen
    ADD CONSTRAINT peminjamen_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.peminjamen DROP CONSTRAINT peminjamen_pkey;
       public            postgres    false    229            �           2606    30200 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            �           2606    30203 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            �           2606    30173    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            �           2606    30171    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            �           1259    30179    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    219            �           1259    30201 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �           2606    30244 -   buku_kategoris buku_kategoris_buku_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.buku_kategoris
    ADD CONSTRAINT buku_kategoris_buku_id_foreign FOREIGN KEY (buku_id) REFERENCES public.bukus(id) ON DELETE CASCADE;
 W   ALTER TABLE ONLY public.buku_kategoris DROP CONSTRAINT buku_kategoris_buku_id_foreign;
       public          postgres    false    4753    231    225            �           2606    30249 1   buku_kategoris buku_kategoris_kategori_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.buku_kategoris
    ADD CONSTRAINT buku_kategoris_kategori_id_foreign FOREIGN KEY (kategori_id) REFERENCES public.kategoris(id) ON DELETE CASCADE;
 [   ALTER TABLE ONLY public.buku_kategoris DROP CONSTRAINT buku_kategoris_kategori_id_foreign;
       public          postgres    false    227    4755    231            �           2606    30227 %   peminjamen peminjamen_buku_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.peminjamen
    ADD CONSTRAINT peminjamen_buku_id_foreign FOREIGN KEY (buku_id) REFERENCES public.bukus(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.peminjamen DROP CONSTRAINT peminjamen_buku_id_foreign;
       public          postgres    false    225    4753    229            �           2606    30232 %   peminjamen peminjamen_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.peminjamen
    ADD CONSTRAINT peminjamen_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.peminjamen DROP CONSTRAINT peminjamen_user_id_foreign;
       public          postgres    false    4741    218    229            ;   :   x�3��!CNC.(ۈӈ��6�͠lN.s(۔Ә��6������b���� �|{      5   �   x�}�An� E�p���+C%�m��J��e7ӆ&$6T�,z��U����r�޼� 
T��� �ѕA�����#A�zJ!
�*��y Ϛ^�L��:/���pt��P�C�e.F���ͬ�r$h�@�C��ϻc9�ug-�=hTi��7u���W�8��-7�W7N6:h��H��κ�x��>O\?Z�)W�~��N�z�'�s>�y)N!3g,~�i#�ͬ�1@���W�P��s�؝�y      1      x������ � �      7   ]   x�3�4202�54�52V04�25�21�*�_T�_�eD�����ļ�D.�����������1V1���ԢL.c�v@t Ō8�K2��b���� ��*      ,   �   x�m���0@��ǘ�0�1iT�m3��w�Ș�}:�=pB	%�$@���ֱ^�V��Ӣ��O �B>��/�:r�yIJ�+ɚ�Δ��'�h�M�������C(�FO�ۖ}P��&�*�ڀ� Y`��k6�&��֩h�a]��*��=so=���:��������,�xs�vL      /      x������ � �      9   k   x�����0k<E �G@��&���W�#���t�;�Yk��ő7Ty9%�����:�c��(ƭaW:�A���M{�����+I�3Kء-����ǆ .�*A]      3      x������ � �      .   �  x���Ks�@��ͯ��m��a5���--( jeC�`�A�_�Lf���TV��Y�s�{1I��lA�!��*�˛xS1�F�����˪N��S���QӴ���)�i4](�����l�RW<Q�jT��b·G�R>���rk<3!�E-V��J۹��В�r����ģ��}vIsX�U��wSo2�,���o�KO�!�!����m�ͣ�_���c�,�����5��p�f!�L5�%-��;M-���;O�<'%�K<�wK����̀�) �wx2�|/��:),�q��e���5ܯ��|�
b��:�R�g���O�`{�|��4XQd�m~`�V��dX���T^�Pq��6��meu�T���:�hp>��u�=��F��7�@��     