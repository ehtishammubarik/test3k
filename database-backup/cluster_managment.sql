PGDMP     .                     x            cluster_managment    12.2    12.2 6    Q           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            R           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            S           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            T           1262    17896    cluster_managment    DATABASE     �   CREATE DATABASE cluster_managment WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
 !   DROP DATABASE cluster_managment;
                postgres    false            �            1259    18614    cluster_baremetal    TABLE     *  CREATE TABLE public.cluster_baremetal (
    id integer NOT NULL,
    status character varying(11),
    "time" timestamp(0) without time zone,
    server_id character varying(50),
    rack character varying(50),
    server_hostname character varying(255),
    mac_ipmi character varying(50),
    status_ipmi character varying(50),
    mac_eth1 character varying(50),
    mac_eth2 character varying(50),
    status_eth1 character varying(50),
    status_eth2 character varying(50),
    node_type character varying(50),
    ip_ipmi character varying(255),
    ip_eth1 character varying(255),
    ip_eth2 character varying(255),
    ip_eth3 character varying(255),
    ip_eth4 character varying(255),
    tun_status integer,
    tun_ip character varying(255),
    system_info text,
    os character varying(50),
    ram integer,
    extra_hdd character varying(50),
    anydesk character varying(100),
    teamviewer character varying(100),
    notes1 text,
    notes2 text,
    notes3 text,
    ssh_id_rsa_pri text,
    ssh_id_rsa_pub text,
    ssh_authorized_keys text,
    tun_ssh_id_rsa_pri text,
    tun_ssh_id_rsa_pub text,
    tun_hostname character varying(255),
    added_by integer,
    added_ip character varying(191),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.cluster_baremetal;
       public         heap    postgres    false            �            1259    18612    cluster_baremetal_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cluster_baremetal_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.cluster_baremetal_id_seq;
       public          postgres    false    210            U           0    0    cluster_baremetal_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.cluster_baremetal_id_seq OWNED BY public.cluster_baremetal.id;
          public          postgres    false    209            �            1259    18627    cluster_virtualmachine    TABLE     �  CREATE TABLE public.cluster_virtualmachine (
    id integer NOT NULL,
    status character varying(11),
    "time" timestamp(0) without time zone,
    server_hostname character varying(255),
    mac_eth1 character varying(50),
    status_eth1 character varying(50),
    node_type character varying(50),
    ip_eth1 character varying(255),
    tun_status integer,
    system_info text,
    os character varying(50),
    ram integer,
    extra_hdd character varying(50),
    anydesk character varying(100),
    teamviewer character varying(100),
    notes1 text,
    notes2 text,
    notes3 text,
    ssh_id_rsa_pri text,
    ssh_id_rsa_pub text,
    ssh_authorized_keys text,
    tun_ssh_id_rsa_pri text,
    tun_ssh_id_rsa_pub text,
    tun_hostname character varying(255),
    added_by integer,
    added_ip character varying(191),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.cluster_virtualmachine;
       public         heap    postgres    false            �            1259    18625    cluster_virtualmachine_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cluster_virtualmachine_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.cluster_virtualmachine_id_seq;
       public          postgres    false    212            V           0    0    cluster_virtualmachine_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.cluster_virtualmachine_id_seq OWNED BY public.cluster_virtualmachine.id;
          public          postgres    false    211            �            1259    18602    failed_jobs    TABLE     �   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    18600    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    208            W           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    207            �            1259    18640    iot_nodelabels    TABLE     L  CREATE TABLE public.iot_nodelabels (
    id integer NOT NULL,
    nodeid character varying(255) NOT NULL,
    aceso_node_serial character varying(255) NOT NULL,
    nodetype character varying(255) NOT NULL,
    company character varying(255) NOT NULL,
    location1 character varying(255) NOT NULL,
    location2 character varying(255) NOT NULL,
    location3 character varying(255) NOT NULL,
    nodelabels text NOT NULL,
    notes text NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.iot_nodelabels;
       public         heap    postgres    false            �            1259    18638    iot_nodelabels_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iot_nodelabels_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.iot_nodelabels_id_seq;
       public          postgres    false    214            X           0    0    iot_nodelabels_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.iot_nodelabels_id_seq OWNED BY public.iot_nodelabels.id;
          public          postgres    false    213            �            1259    17899 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(191) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    17897    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    203            Y           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    202            �            1259    18596    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(191) NOT NULL,
    token character varying(191) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    18583    users    TABLE     2  CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(191) NOT NULL,
    email character varying(191) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(191) NOT NULL,
    phone character varying(50),
    type character varying(20),
    about text,
    added_ip character varying(191),
    added_time timestamp(0) without time zone,
    status integer,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    18581    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    205            Z           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    204            �
           2604    18617    cluster_baremetal id    DEFAULT     |   ALTER TABLE ONLY public.cluster_baremetal ALTER COLUMN id SET DEFAULT nextval('public.cluster_baremetal_id_seq'::regclass);
 C   ALTER TABLE public.cluster_baremetal ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210            �
           2604    18630    cluster_virtualmachine id    DEFAULT     �   ALTER TABLE ONLY public.cluster_virtualmachine ALTER COLUMN id SET DEFAULT nextval('public.cluster_virtualmachine_id_seq'::regclass);
 H   ALTER TABLE public.cluster_virtualmachine ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    212    212            �
           2604    18605    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    208    207    208            �
           2604    18643    iot_nodelabels id    DEFAULT     v   ALTER TABLE ONLY public.iot_nodelabels ALTER COLUMN id SET DEFAULT nextval('public.iot_nodelabels_id_seq'::regclass);
 @   ALTER TABLE public.iot_nodelabels ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213    214            �
           2604    17902    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202    203            �
           2604    18586    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    205    205            J          0    18614    cluster_baremetal 
   TABLE DATA           �  COPY public.cluster_baremetal (id, status, "time", server_id, rack, server_hostname, mac_ipmi, status_ipmi, mac_eth1, mac_eth2, status_eth1, status_eth2, node_type, ip_ipmi, ip_eth1, ip_eth2, ip_eth3, ip_eth4, tun_status, tun_ip, system_info, os, ram, extra_hdd, anydesk, teamviewer, notes1, notes2, notes3, ssh_id_rsa_pri, ssh_id_rsa_pub, ssh_authorized_keys, tun_ssh_id_rsa_pri, tun_ssh_id_rsa_pub, tun_hostname, added_by, added_ip, created_at, updated_at) FROM stdin;
    public          postgres    false    210   OK       L          0    18627    cluster_virtualmachine 
   TABLE DATA           q  COPY public.cluster_virtualmachine (id, status, "time", server_hostname, mac_eth1, status_eth1, node_type, ip_eth1, tun_status, system_info, os, ram, extra_hdd, anydesk, teamviewer, notes1, notes2, notes3, ssh_id_rsa_pri, ssh_id_rsa_pub, ssh_authorized_keys, tun_ssh_id_rsa_pri, tun_ssh_id_rsa_pub, tun_hostname, added_by, added_ip, created_at, updated_at) FROM stdin;
    public          postgres    false    212   �K       H          0    18602    failed_jobs 
   TABLE DATA           [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    208   �K       N          0    18640    iot_nodelabels 
   TABLE DATA           �   COPY public.iot_nodelabels (id, nodeid, aceso_node_serial, nodetype, company, location1, location2, location3, nodelabels, notes, status, created_at, updated_at) FROM stdin;
    public          postgres    false    214   L       C          0    17899 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    203   1L       F          0    18596    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    206   �L       E          0    18583    users 
   TABLE DATA           �   COPY public.users (id, name, email, email_verified_at, password, phone, type, about, added_ip, added_time, status, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    205   �L       [           0    0    cluster_baremetal_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.cluster_baremetal_id_seq', 10, true);
          public          postgres    false    209            \           0    0    cluster_virtualmachine_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.cluster_virtualmachine_id_seq', 1, false);
          public          postgres    false    211            ]           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    207            ^           0    0    iot_nodelabels_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.iot_nodelabels_id_seq', 1, false);
          public          postgres    false    213            _           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 64, true);
          public          postgres    false    202            `           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 1, true);
          public          postgres    false    204            �
           2606    18624 -   cluster_baremetal cluster_baremetal_id_unique 
   CONSTRAINT     f   ALTER TABLE ONLY public.cluster_baremetal
    ADD CONSTRAINT cluster_baremetal_id_unique UNIQUE (id);
 W   ALTER TABLE ONLY public.cluster_baremetal DROP CONSTRAINT cluster_baremetal_id_unique;
       public            postgres    false    210            �
           2606    18622 (   cluster_baremetal cluster_baremetal_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.cluster_baremetal
    ADD CONSTRAINT cluster_baremetal_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.cluster_baremetal DROP CONSTRAINT cluster_baremetal_pkey;
       public            postgres    false    210            �
           2606    18637 7   cluster_virtualmachine cluster_virtualmachine_id_unique 
   CONSTRAINT     p   ALTER TABLE ONLY public.cluster_virtualmachine
    ADD CONSTRAINT cluster_virtualmachine_id_unique UNIQUE (id);
 a   ALTER TABLE ONLY public.cluster_virtualmachine DROP CONSTRAINT cluster_virtualmachine_id_unique;
       public            postgres    false    212            �
           2606    18635 2   cluster_virtualmachine cluster_virtualmachine_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.cluster_virtualmachine
    ADD CONSTRAINT cluster_virtualmachine_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.cluster_virtualmachine DROP CONSTRAINT cluster_virtualmachine_pkey;
       public            postgres    false    212            �
           2606    18611    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    208            �
           2606    18650 '   iot_nodelabels iot_nodelabels_id_unique 
   CONSTRAINT     `   ALTER TABLE ONLY public.iot_nodelabels
    ADD CONSTRAINT iot_nodelabels_id_unique UNIQUE (id);
 Q   ALTER TABLE ONLY public.iot_nodelabels DROP CONSTRAINT iot_nodelabels_id_unique;
       public            postgres    false    214            �
           2606    18648 "   iot_nodelabels iot_nodelabels_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.iot_nodelabels
    ADD CONSTRAINT iot_nodelabels_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.iot_nodelabels DROP CONSTRAINT iot_nodelabels_pkey;
       public            postgres    false    214            �
           2606    17904    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    203            �
           2606    18595    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    205            �
           2606    18593    users users_id_unique 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_id_unique UNIQUE (id);
 ?   ALTER TABLE ONLY public.users DROP CONSTRAINT users_id_unique;
       public            postgres    false    205            �
           2606    18591    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    205            �
           1259    18599    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    206            J   {   x���A
�@E��aJf��9A6�C���?QF(�����>�W��3�� �`�J�W����<����?�Z��{S�q��/�d!��N���T���O!��jP7�;poq:���?A�K)� �,h�      L      x������ � �      H      x������ � �      N      x������ � �      C   �   x�]���0��cv1�C�^L�j�)��Go_!Q~zУ�I���h�P�小L��$�	39�J�3lK�+���;�#'��g�!\p�;s#/<�#�Mo����i���_�KI�#:�<r&YU}P�m���c.$#�w?�J큶�O}�8���˺�zRJ} ��`�      F      x������ � �      E   �   x�]�͎�0 ���J�W�'e%�XE7^���n�J�*>���EM�0��xV]����^��.D�+<���
Q�;UY� u���AL,Z�CN������e*^?u�ȦQ3����=cet�Y�g2T8. ����w���.	&Dl6a���C-gQCb��Oٮ�b�(��Si�2�3����/�ا?7Q�M�k��-7Er     